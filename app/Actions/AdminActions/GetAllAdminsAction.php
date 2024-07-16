<?php

namespace App\Actions\AdminActions;

use App\Models\Admin\Admin;

class GetAllAdminsAction
{
    public function __invoke()
    {
        return Admin::query()->get();
    }
}
