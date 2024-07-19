<?php

namespace App\Actions\AdminActions;

class RenderAdminCreateGenreViewAction
{
    public function __invoke()
    {
        return view('admins.create-genre');
    }
}
