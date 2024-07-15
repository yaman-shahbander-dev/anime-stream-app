<?php

namespace App\Actions\ShowActions;

use App\Models\Show\Show;

class RenderShowsOfCategoryAction
{
    public function __invoke(array $attributes)
    {
        return view('shows.category', $attributes);
    }
}
