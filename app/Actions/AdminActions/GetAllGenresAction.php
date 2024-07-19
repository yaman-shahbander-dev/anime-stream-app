<?php

namespace App\Actions\AdminActions;

use App\Models\Category\Category;

class GetAllGenresAction
{
    public function __invoke()
    {
        return Category::query()->get();
    }
}
