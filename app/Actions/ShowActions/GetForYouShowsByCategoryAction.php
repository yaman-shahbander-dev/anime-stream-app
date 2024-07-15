<?php

namespace App\Actions\ShowActions;

use App\Models\Category\Category;
use App\Models\Show\Show;

class GetForYouShowsByCategoryAction
{
    public function __invoke(Category $category)
    {
        return Show::query()
            ->where('genre', $category->name)
            ->inRandomOrder()
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
    }
}
