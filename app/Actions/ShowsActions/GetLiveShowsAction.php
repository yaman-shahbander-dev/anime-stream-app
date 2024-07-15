<?php

namespace App\Actions\ShowsActions;

use App\Enums\GenreEnum;
use App\Models\Show\Show;

class GetLiveShowsAction
{
    public function __invoke()
    {
        return Show::query()
            ->where('genre', GenreEnum::ACTION->value)
            ->take(6)
            ->get();
    }
}
