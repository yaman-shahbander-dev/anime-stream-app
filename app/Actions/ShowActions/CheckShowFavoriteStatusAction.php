<?php

namespace App\Actions\ShowActions;

use App\Models\Follow\Follow;
use Illuminate\Support\Facades\Auth;

class CheckShowFavoriteStatusAction
{
    public function __invoke(int $showId)
    {
        return Follow::query()
            ->where([
                'show_id' => $showId,
                'user_id' => Auth::user()->id
            ])
            ->exists();
    }
}
