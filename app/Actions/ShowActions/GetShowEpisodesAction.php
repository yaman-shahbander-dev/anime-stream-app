<?php

namespace App\Actions\ShowActions;

use App\Models\Episode\Episode;

class GetShowEpisodesAction
{
    public function __invoke(int $showId)
    {
        return Episode::query()
            ->where('show_id', $showId)
            ->orderBy('id')
            ->get();
    }
}
