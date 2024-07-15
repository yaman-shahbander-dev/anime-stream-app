<?php

namespace App\Actions\ShowActions;

use App\Models\Show\Show;

class RenderAnimeWatchingViewAction
{
    public function __invoke(array $attributes)
    {
        return view('shows.anime-watching', $attributes);
    }
}
