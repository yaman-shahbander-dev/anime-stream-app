<?php

namespace App\Actions\ShowActions;

class RenderSearchViewAction
{
    public function __invoke(array $attributes)
    {
        return view('shows.searches', $attributes);
    }
}
