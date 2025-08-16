<?php

namespace App\Livewire;

use App\Services\ClashOfClansService;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Clans extends Component
{
    #[Validate('required|string|min:3|max:50')]
    public string $search = '';

    #[Validate('nullable|int|min:1|max:50')]
    public int|null $minMembers = null;

    #[Validate('nullable|int|min:1|max:50')]
    public int|null $maxMembers = null;

    #[Validate('nullable|int|min:1|max:50000')]
    public int|null $minClanPoints = null;

    #[Validate('nullable|int|min:1|max:100')]
    public int|null $minClanLevel = null;

    #[Validate('nullable|string|max:50')]
    public string|null $warFrequency = null;

    public string $sort = 'clanPoints';
    public Collection|array $clans = [];

    /**
     * Search for clans using the Clash of Clans API service.
     *
     * @param ClashOfClansService $service
     * @return void
     */
    public function searchClan(ClashOfClansService $service): void
    {
        $this->validate();
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
