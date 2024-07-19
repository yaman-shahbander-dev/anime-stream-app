<?php

namespace App\Actions\AdminActions;

use App\Models\Show\Show;

class GetAllShowsAction
{
    public function __invoke()
    {
        return Show::query()->get();
    }
}
