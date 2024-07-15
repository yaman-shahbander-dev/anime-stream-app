<?php

namespace App\Actions\ShowsActions;

use App\Models\Show\Show;

class GetRecentlyAddedShowsAction
{
    public function __invoke()
    {
        return Show::query()
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
    }
}
