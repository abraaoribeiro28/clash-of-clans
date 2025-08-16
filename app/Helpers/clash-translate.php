<?php

if (!function_exists('translate_war_frequency')) {
    function translate_war_frequency(?string $frequency): string
    {
        $map = [
            'always' => 'Sempre',
            'moreThanOncePerWeek'=> 'Mais de uma vez por semana',
            'oncePerWeek' => 'Uma vez por semana',
            'lessThanOncePerWeek'=> 'Menos de uma vez por semana',
            'never' => 'Nunca',
            'unknown' => 'Desconhecida',
        ];

        return $map[$frequency] ?? ($frequency ?? 'Desconhecida');
    }
}

if (!function_exists('translate_league')) {
    function translate_league(?string $leagueName): string
    {
        $map = [
            'Unranked' => 'Sem classificação',
            'Bronze League I' => 'Liga Bronze I',
            'Bronze League II' => 'Liga Bronze II',
            'Bronze League III'   => 'Liga Bronze III',
            'Silver League I' => 'Liga Prata I',
            'Silver League II' => 'Liga Prata II',
            'Silver League III' => 'Liga Prata III',
            'Gold League I' => 'Liga Ouro I',
            'Gold League II' => 'Liga Ouro II',
            'Gold League III' => 'Liga Ouro III',
            'Crystal League I' => 'Liga Cristal I',
            'Crystal League II' => 'Liga Cristal II',
            'Crystal League III' => 'Liga Cristal III',
            'Master League I' => 'Liga Mestre I',
            'Master League II' => 'Liga Mestre II',
            'Master League III' => 'Liga Mestre III',
            'Champion League I' => 'Liga Campeão I',
            'Champion League II' => 'Liga Campeão II',
            'Champion League III' => 'Liga Campeão III',
            'Titan League I' => 'Liga Titã I',
            'Titan League II' => 'Liga Titã II',
            'Titan League III' => 'Liga Titã III',
            'Legend League' => 'Liga Lendária',
        ];

        return $map[$leagueName] ?? ($leagueName ?? 'Desconhecida');
    }
}

if (!function_exists('translate_clan_type')) {
    function translate_clan_type(?string $type): string
    {
        $map = [
            'open' => 'Aberto',
            'inviteOnly' => 'Apenas por convite',
            'closed' => 'Fechado',
        ];

        return $map[$type] ?? ($type ?? 'Desconhecido');
    }
}
