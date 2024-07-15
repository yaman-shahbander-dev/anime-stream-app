<?php

namespace App\Services;


use App\Actions\ShowActions\GetRandomShowsAction;
use App\Actions\ShowActions\RenderAnimeDetailsViewAction;
use App\Models\Show\Show;

class ShowService
{
    public function renderShowView(array $attributes)
    {
        return app(RenderAnimeDetailsViewAction::class)($attributes);
    }

    public function getRandomShows(int $id)
    {
        return app(GetRandomShowsAction::class)($id);
    }
}
