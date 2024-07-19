<?php

namespace App\Actions\AdminActions;

use App\Models\Category\Category;

class GetAllCategoriesAction
{
    public function __invoke()
    {
        return Category::query()->get();
    }
}
