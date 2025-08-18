<?php

use App\Jobs\UpdateClashPlayerJob;
use App\Models\Player;

Schedule::call(function () {
    $users = Player::all();
    foreach ($users as $user) {
        dispatch(new UpdateClashPlayerJob($user->id));
    }
})->hourly();
