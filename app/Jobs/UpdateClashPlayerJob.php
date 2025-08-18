<?php

namespace App\Jobs;

use App\Models\Player;
use App\Services\ClashOfClansService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateClashPlayerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected int $playerId;

    /**
     * Create a new job instance.
     */
    public function __construct(int $playerId)
    {
        $this->playerId = $playerId;
    }

    /**
     * Execute the job.
     */
    public function handle(ClashOfClansService $service): void
    {
        $player = Player::find($this->playerId);

        if (!$player) {
            echo "Player não encontrado no banco de dados: {$this->playerId}\n";
            return;
        }

        $data = $service->getPlayer($player->tag);

        if (isset($player['error'])) {
            echo "Erro na api - jogador: {$player->tag}\n";
            return;
        }

        $player->update([
            'name' => $data['name'],
            'trophies' => $data['trophies'],
            'bestTrophies' => $data['bestTrophies'],
            'expLevel' => $data['expLevel'],
            'attackWins' => $data['attackWins'],
            'defenseWins' => $data['defenseWins'],
            'donations' => $data['donations'],
            'clanName' => $data['clan']['name'] ?? null,
            'clanTag' => $data['clan']['tag'] ?? null,
            'league' => $data['league']['name'] ?? null,
            'leagueIcon' => $data['league']['iconUrls']['small'] ?? null,
        ]);

        echo "Jogador atualizado: {$player->tag}\n";
    }
}
