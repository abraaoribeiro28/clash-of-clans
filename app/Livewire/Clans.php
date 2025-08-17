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
    public array|null $pages = [];

    protected ClashOfClansService $service;

    public function __construct()
    {
        $this->service = new ClashOfClansService();
    }

    /**
     * Search for clans using the Clash of Clans API service.
     *
     * @return void
     */
    public function searchClan(): void
    {
        $this->validate();

        if (! $this->search) {
            return;
        }

        $result = $this->service->searchClans(
            $this->search,
            $this->minMembers,
            $this->maxMembers,
            $this->minClanPoints,
            $this->minClanLevel,
            $this->warFrequency ?: null,
        );

        $this->clans = $result['items']->sortByDesc($this->sort);
        $this->pages = $result['paging'];
    }

    /**
     * Sort the current clans collection by the given property in descending order.
     *
     * @return void
     */
    public function updatedSort(): void
    {
        $this->clans = $this->clans ? $this->clans->sortByDesc($this->sort) : [];
    }

    /**
     * Load the next page of clans based on the "after" cursor.
     *
     * @param string $after
     * @return void
     */
    public function next(string $after): void
    {
        $this->clans = $this->service->searchClans($this->search, after: $after);
    }

    /**
     * Load the previous page of clans based on the "before" cursor.
     *
     * @param string $before
     * @return void
     */
    public function previous(string $before): void
    {
        $this->clans = $this->service->searchClans($this->search, before: $before);
    }
}
