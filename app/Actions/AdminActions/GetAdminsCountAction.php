<?php

namespace App\Actions\AdminActions;

use App\Models\Admin\Admin;

class GetAdminsCountAction
{
    public function __invoke()
    {
        return Admin::query()->count();
    }
}
