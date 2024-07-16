<?php

namespace App\Services;

use App\Actions\AdminActions\LoginAdminAction;
use App\Actions\AdminActions\RenderAdminIndexAction;
use App\Actions\AdminActions\RenderAdminLoginFormAction;

class AdminService
{
    public function renderAdminLoginForm()
    {
        return app(RenderAdminLoginFormAction::class)();
    }

    public function loginAdmin(array $data)
    {
        return app(LoginAdminAction::class)($data);
    }

    public function renderAdminIndex()
    {
        return app(RenderAdminIndexAction::class)();
    }
}
