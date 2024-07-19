<?php

namespace App\Actions\AdminActions;

class RenderAdminGenresViewAction
{
    public function __invoke(array $attributes)
    {
        return view('admins.all-genres', $attributes);
    }
}
