<?php

namespace App\Actions\AdminActions;

use App\Models\Category\Category;

class GetCategoriesCountAction
{
    public function __invoke()
    {
        return Category::query()->count();
    }
}
