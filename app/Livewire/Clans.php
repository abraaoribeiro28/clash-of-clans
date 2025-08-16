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
    public Collection|array $clans = [];

    /**
     * Search for clans using the Clash of Clans API service.
     *
     * @param ClashOfClansService $service
     * @return void
     */
    public function searchClan(ClashOfClansService $service): void
    {
        $this->clans = $service->searchClans($this->search, $this->sort);
    }
}
