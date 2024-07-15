<?php

namespace App\Actions\ShowActions;

use App\Models\Show\Show;

class RenderAnimeDetailsViewAction
{
    public function __invoke(array $attributes)
    {
        return view('shows.anime-details', $attributes);
    }
}
