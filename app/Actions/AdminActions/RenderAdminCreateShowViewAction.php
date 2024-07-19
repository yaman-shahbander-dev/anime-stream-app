<?php

namespace App\Actions\AdminActions;

class RenderAdminCreateShowViewAction
{
    public function __invoke(array $attributes)
    {
        return view('admins.create-show', $attributes);
    }
}
