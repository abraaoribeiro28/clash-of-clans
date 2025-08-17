<?php

namespace App\Livewire;

use App\Models\Player;
use App\Services\ClashOfClansService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddPlayer extends Component
{
    #[Validate('required|string|min:3|max:10')]
    public string $tag = '';

    public array|null $player;

    /**
     * Search for a player by tag and load their data from the Clash of Clans API.
     *
     * @param ClashOfClansService $service
     *
     * @return void
     */
    public function search(ClashOfClansService $service): void
    {
        $this->validate();

        $player = Player::where('tag', $this->tag)->first();

        if ($player) {
            $this->dispatch(
                'notify',
                type: 'warning',
                message: 'Este jogador já está cadastrado na plataforma.'
            );
            return;
        }

        $player = $service->getPlayer($this->tag);

        if (isset($player['error'])) {
            $this->dispatch(
                'notify',
                type: 'warning',
                message: 'Jogador não encontrado.'
            );
            return;
        }

        $this->player = $player;
    }

    /**
     * Persist the currently loaded player into the database.
     *
     * @return void
     */
    public function save(): void
    {
        Player::updateOrCreate(['tag' => $this->player['tag']], [
            'name' => $this->player['name'],
            'trophies' => $this->player['trophies'],
            'bestTrophies' => $this->player['bestTrophies'],
            'expLevel' => $this->player['expLevel'],
            'attackWins' => $this->player['attackWins'],
            'defenseWins' => $this->player['defenseWins'],
            'donations' => $this->player['donations'],
            'clanName' => $this->player['clan']['name'] ?? null,
            'clanTag' => $this->player['clan']['tag'] ?? null,
            'league' => $this->player['league']['name'] ?? null,
            'leagueIcon' => $this->player['league']['iconUrls']['small'] ?? null,
        ]);

        $this->dispatch('updated-players',);

        $this->dispatch(
            'notify',
            type: 'success',
            message: 'Jogador cadastrado com sucesso.'
        );

        $this->cancel();
    }

    /**
     * Reset the form state.
     *
     * @return void
     */
    public function cancel(): void
    {
        $this->player = null;
        $this->tag = '';
    }
}
