<?php

namespace App\Actions\ShowsActions;

use App\Models\Show\Show;

class GetForYouShowsAction
{
    public function __invoke()
    {
        return Show::query()
            ->inRandomOrder()
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
    }
}
