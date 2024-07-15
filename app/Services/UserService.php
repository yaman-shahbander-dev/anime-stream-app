<?php

namespace App\Services;

use App\Actions\UserActions\GetFollowedShowsAction;
use App\Actions\UserActions\RenderFollowedShowsAction;

class UserService
{
    public function getFollowedShows()
    {
        return app(GetFollowedShowsAction::class)();
    }

    public function renderFollowedShows(array $attributes)
    {
        return app(RenderFollowedShowsAction::class)($attributes);
    }
}
