<?php

namespace App\Actions\AdminActions;

class RenderAdminIndexAction
{
    public function __invoke(array $attributes)
    {
        return view('admins.index', $attributes);
    }
}
