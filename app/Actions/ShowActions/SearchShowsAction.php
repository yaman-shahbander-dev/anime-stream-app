<?php

namespace App\Actions\ShowActions;

use App\Models\Show\Show;

class SearchShowsAction
{
    public function __invoke(string $show)
    {
        return Show::query()
            ->where('name', 'like', "%$show%")
            ->orWhere('genre', 'like', "%$show%")
            ->get();
    }
}
