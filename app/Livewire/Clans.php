<?php

namespace App\Livewire;

use App\Services\ClashOfClansService;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Clans extends Component
{
    public string $search = '';
    public string $sort = 'clanPoints';
    public int|null $minMembers = null;
    public int|null $maxMembers = null;
    public int|null $minClanPoints = null;
    public int|null $minClanLevel = null;
    public string|null $warFrequency = null;
    public Collection|array $clans = [];

    /**
     * Search for clans using the Clash of Clans API service.
     *
     * @param ClashOfClansService $service
     * @return void
     */
    public function searchClan(ClashOfClansService $service): void
    {
        if ($this->search) {
            $this->clans = $service->searchClans(
                $this->search,
                $this->minMembers,
                $this->maxMembers,
                $this->minClanPoints,
                $this->minClanLevel,
                !empty($this->warFrequency) ? $this->warFrequency : null
            )->sortByDesc($this->sort);
        }
    }

    public function updatedSort(): void
    {
        $this->clans = $this->clans ? $this->clans->sortByDesc($this->sort) : [];
    }
}
