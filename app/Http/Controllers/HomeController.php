<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ClashOfClansService;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ClashOfClansService $clash)
    {
        $clans = Cache::remember('topClans', 3600, function () use ($clash) {
            return $clash->getTopClans('32000249');
        });

        $players = Cache::remember('topPlayers', 3600, function () use ($clash) {
            return $clash->getTopPlayers('32000249');
        });

        return view('home.app', compact('clans', 'players'));
    }
}
