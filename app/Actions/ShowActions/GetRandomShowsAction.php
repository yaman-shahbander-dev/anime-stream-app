<?php

namespace App\Actions\ShowActions;

use App\Models\Show\Show;

class GetRandomShowsAction
{
    public function __invoke(int $id)
    {
        return Show::query()
            ->where('id', '!=', $id)
            ->take(5)
            ->get();
    }
}
