<?php

namespace App\Actions\ShowsActions;

use App\Models\Show\Show;

class GetShowsAction
{
    public function __invoke()
    {
        return Show::query()
            ->with('episodes')
            ->take(4)
            ->get();
    }
}
