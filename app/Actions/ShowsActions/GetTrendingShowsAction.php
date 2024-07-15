<?php

namespace App\Actions\ShowsActions;

use App\Models\Show\Show;

class GetTrendingShowsAction
{
    public function __invoke()
    {
        return Show::query()
            ->take(6)
            ->get();
    }
}
