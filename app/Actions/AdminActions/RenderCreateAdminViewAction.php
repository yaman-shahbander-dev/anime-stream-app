<?php

namespace App\Actions\AdminActions;

class RenderCreateAdminViewAction
{
    public function __invoke()
    {
        return view('admins.create-admin');
    }
}
