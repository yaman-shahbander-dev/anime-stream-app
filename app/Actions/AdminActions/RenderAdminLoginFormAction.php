<?php

namespace App\Actions\AdminActions;

class RenderAdminLoginFormAction
{
    public function __invoke()
    {
        return view('admins.login');
    }
}
