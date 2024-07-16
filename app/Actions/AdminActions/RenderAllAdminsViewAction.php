<?php

namespace App\Actions\AdminActions;


class RenderAllAdminsViewAction
{
    public function __invoke(array $attributes)
    {
        return view('admins.all-admins', $attributes);
    }
}
