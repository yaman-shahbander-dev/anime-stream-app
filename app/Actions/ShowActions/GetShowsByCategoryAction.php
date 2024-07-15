<?php

namespace App\Actions\ShowActions;

use App\Models\Category\Category;
use App\Models\Show\Show;

class GetShowsByCategoryAction
{
    public function __invoke(Category $category)
    {
        return Show::query()
            ->where('genre', $category->name)
            ->get() ?? null;
    }
}
