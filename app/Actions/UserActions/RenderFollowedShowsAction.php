<?php

namespace App\Actions\UserActions;

class RenderFollowedShowsAction
{
    public function __invoke(array $attributes)
    {
        return view('users.followed-shows', $attributes);
    }
}
