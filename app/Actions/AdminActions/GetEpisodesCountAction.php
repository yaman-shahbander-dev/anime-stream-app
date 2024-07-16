<?php

namespace App\Actions\AdminActions;

use App\Models\Episode\Episode;

class GetEpisodesCountAction
{
    public function __invoke()
    {
        return Episode::query()->count();
    }
}
