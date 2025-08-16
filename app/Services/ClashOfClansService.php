<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class ClashOfClansService
{
    protected string $baseUrl;
    protected string $token;

    public function __construct()
    {
        $this->baseUrl = 'https://api.clashofclans.com/v1';
        $this->token = config('services.clash.token');
    }

    /**
     * Send a request to Clash of Clans API.
     *
     * @param string $method
     * @param string $endpoint
     * @param array  $params
     *
     * @return array
     *
     * @throws RuntimeException
     */
    protected function request(string $method, string $endpoint, array $params = []): array
    {
        $response = Http::withToken($this->token)
            ->$method($this->baseUrl . $endpoint, $params);

        if ($response->failed()) {
            throw new RuntimeException("Clash of Clans API error: " . $response->body());
        }

        return $response->json();
    }

    /**
     * Get top clans by location.
     *
     * @param string $locationId
     * @param int    $limit
     *
     * @return Collection
     *
     * @throws RuntimeException
     */
    public function getTopClans(string $locationId = '32000006', int $limit = 10): Collection
    {
        $data = $this->request('get', "/locations/{$locationId}/rankings/clans");

        return collect($data['items'])->take($limit);
    }

    /**
     * Get top players by location.
     *
     * @param string $locationId
     * @param int    $limit
     *
     * @return Collection
     *
     * @throws RuntimeException
     */
    public function getTopPlayers(string $locationId = '32000006', int $limit = 10): Collection
    {
        $data = $this->request('get', "/locations/{$locationId}/rankings/players");

        return collect($data['items'])->take($limit);
    }

    /**
     * Get top leagues by location.
     *
     * @param string $locationId
     * @param int    $limit
     *
     * @return Collection
     *
     * @throws RuntimeException
     */
    public function getTopLeagues(string $locationId = '32000006', int $limit = 10): Collection
    {
        $data = $this->request('get', "/leagues");

        return collect($data['items'] ?? [])
            ->sortByDesc('id')
            ->take($limit);
    }

    /**
     * Search clans by name or tag, with optional sorting.
     *
     * @param string $query
     * @param int|null $minMembers
     * @param int|null $maxMembers
     * @param int|null $minClanPoints
     * @param int|null $minClanLevel
     * @param string|null $warFrequency
     * @param int $limit
     *
     * @return Collection
     */
    public function searchClans(
        string $query,
        int|null $minMembers = null,
        int|null $maxMembers = null,
        int|null $minClanPoints = null,
        int|null $minClanLevel = null,
        string|null $warFrequency = null,
        int $limit = 10,
        string|null $after = null,
        string|null $before = null,
    ): Collection
    {
        if (str_starts_with($query, '#')) {
            $clan = $this->request('get', '/clans/' . urlencode($query));
            return collect([$clan]);
        }

        $params = [
            'name' => $query,
            'minMembers' => $minMembers,
            'maxMembers' => $maxMembers,
            'minClanPoints' => $minClanPoints,
            'minClanLevel' => $minClanLevel,
            'warFrequency' => $warFrequency,
            'limit' => $limit,
        ];

        if ($after) {
            $params['after'] = $after;
        }

        if ($before) {
            $params['before'] = $before;
        }

        $data = $this->request('get', '/clans', $params);

        return collect($data ?? []);
    }
}
