<?php

namespace App\Services;

use App\Actions\AdminActions\GetAdminsCountAction;
use App\Actions\AdminActions\GetAllAdminsAction;
use App\Actions\AdminActions\GetCategoriesCountAction;
use App\Actions\AdminActions\GetEpisodesCountAction;
use App\Actions\AdminActions\GetShowsCountAction;
use App\Actions\AdminActions\LoginAdminAction;
use App\Actions\AdminActions\RenderAdminIndexAction;
use App\Actions\AdminActions\RenderAdminLoginFormAction;
use App\Actions\AdminActions\RenderAllAdminsViewAction;
use App\Actions\AdminActions\RenderCreateAdminViewAction;
use App\Actions\AdminActions\StoreAdminAction;

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

    public function renderAdminIndex(array $attributes)
    {
        return app(RenderAdminIndexAction::class)($attributes);
    }

    public function getShowsCount()
    {
        return app(GetShowsCountAction::class)();
    }

    public function getEpisodesCount()
    {
        return app(GetEpisodesCountAction::class)();
    }

    public function getAdminsCount()
    {
        return app(GetAdminsCountAction::class)();
    }

    public function getCategoriesCount()
    {
        return app(GetCategoriesCountAction::class)();
    }

    public function getAllAdmins()
    {
        return app(GetAllAdminsAction::class)();
    }

    public function renderAllAdminsView(array $attributes)
    {
        return app(RenderAllAdminsViewAction::class)($attributes);
    }

    public function renderCreateAdminView()
    {
        return app(RenderCreateAdminViewAction::class)();
    }

    public function storeAdmin(array $data)
    {
        return app(StoreAdminAction::class)($data);
    }
}
