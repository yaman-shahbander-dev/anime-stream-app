<?php

namespace App\Actions\AdminActions;

class RenderAdminIndexAction
{
    public function __invoke()
    {
        return view('admins.index');
    }
}
