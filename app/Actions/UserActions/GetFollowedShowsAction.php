<?php

namespace App\Actions\UserActions;

use App\Models\Follow\Follow;
use Illuminate\Support\Facades\Auth;

class GetFollowedShowsAction
{
    public function __invoke()
    {
        return Follow::query()
            ->where('user_id', Auth::user()->id)
            ->get();
    }
}
