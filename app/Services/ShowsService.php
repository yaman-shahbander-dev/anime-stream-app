<?php

namespace App\Services;

use App\Actions\ShowsActions\GetAdventureShowsAction;
use App\Actions\ShowsActions\GetForYouShowsAction;
use App\Actions\ShowsActions\GetLiveShowsAction;
use App\Actions\ShowsActions\GetRecentlyAddedShowsAction;
use App\Actions\ShowsActions\GetShowsAction;
use App\Actions\ShowsActions\GetTrendingShowsAction;

class ShowsService
{
    public function getShows()
    {
        return app(GetShowsAction::class)();
    }

    public function getTrendingShows()
    {
        return app(GetTrendingShowsAction::class)();
    }

    public function getAdventureShows()
    {
        return app(GetAdventureShowsAction::class)();
    }

    public function getRecentlyAddedShows()
    {
        return app(GetRecentlyAddedShowsAction::class)();
    }

    public function getLiveShows()
    {
        return app(GetLiveShowsAction::class)();
    }

    public function getForYouShows()
    {
        return app(GetForYouShowsAction::class)();
    }
}
