<?php

namespace App\Actions\AdminActions;

use App\Models\Show\Show;

class GetShowsCountAction
{
    public function __invoke()
    {
        return Show::query()->count();
    }
}
