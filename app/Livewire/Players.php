<?php

namespace App\Livewire;

use App\Models\Player;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Players extends Component
{
    use WithPagination;

    public string $search = '';
    public string $leagues = '';

    #[On('updated-players')]
    public function render(): View
    {
        $players = Player::query()
            ->when($this->leagues !== '', function ($query) {
                return $query->whereIn('league', leaguesGroup()[$this->leagues]);
            })
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderByDesc('trophies')
            ->paginate(10);

        return view('livewire.players', compact('players'));
    }

    /**
     * Reset pagination on search update.
     *
     * @return void
     */
    public function updating(): void
    {
        $this->resetPage();
    }
}
