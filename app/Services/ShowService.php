<?php

namespace App\Services;

use App\Actions\ShowActions\GetShowsAction;

class ShowService
{
    public function getShows()
    {
        return app(GetShowsAction::class)();
    }
}
