<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ClashOfClansService
{
    protected $baseUrl;
    protected $token;

    public function __construct()
    {
        $this->baseUrl = 'https://api.clashofclans.com/v1';
        $this->token = config('services.clash.token');
    }

    protected function request($method, $endpoint, $params = [])
    {
        $response = Http::withToken($this->token)
            ->$method($this->baseUrl . $endpoint, $params);

        if ($response->failed()) {
            throw new \Exception("Erro na API do Clash of Clans: " . $response->body());
        }

        return $response->json();
    }

    public function getTopClans($locationId = '32000006', $limit = 10)
    {
        $data = $this->request('get', "/locations/{$locationId}/rankings/clans");

        return collect($data['items'])->take($limit);
    }

    public function getTopPlayers($locationId = '32000006', $limit = 10)
    {
        $data = $this->request('get', "/locations/{$locationId}/rankings/players");

        return collect($data['items'])->take($limit);
    }
}
