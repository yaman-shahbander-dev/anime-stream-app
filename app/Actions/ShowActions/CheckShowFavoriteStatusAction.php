<?php

namespace App\Actions\ShowActions;

use App\Models\Follow\Follow;
use Illuminate\Support\Facades\Auth;

class CheckShowFavoriteStatusAction
{
    public function __invoke(int $showId)
    {
        $user = Auth::user();

        return $user && Follow::query()
                ->where([
                    'show_id' => $showId,
                    'user_id' => $user->id
                ])
                ->exists();
    }
}
