<?php

namespace App\Actions\AdminActions;

class RenderAdminShowsViewAction
{
    public function __invoke(array $attributes)
    {
        return view('admins.all-shows', $attributes);
    }
}
