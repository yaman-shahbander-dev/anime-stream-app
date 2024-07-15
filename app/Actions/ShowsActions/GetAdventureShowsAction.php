<?php

namespace App\Actions\ShowsActions;

use App\Enums\GenreEnum;
use App\Models\Show\Show;

class GetAdventureShowsAction
{
    public function __invoke()
    {
        return Show::query()
            ->where('genre', GenreEnum::ADVENTURE->value)
            ->take(6)
            ->get();
    }
}
