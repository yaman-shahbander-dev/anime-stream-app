<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\OperationResult;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\LoginAdminRequest;
use App\Services\AdminService;

class AdminController extends Controller
{
    public function __construct(protected AdminService $adminService) {}

    public function loginForm()
    {
        return $this->adminService->renderAdminLoginForm();
    }

    public function login(LoginAdminRequest $request)
    {
        $result = $this->adminService->loginAdmin($request->validated());

        if ($result instanceof OperationResult) {
            return redirect()->back()->with([
                'message' => $result->getMessage()
            ]);
        }

        return redirect()->route('dashboard.admin');
    }

    public function index()
    {
        $attributes = [
            'showsCount' => $this->adminService->getShowsCount(),
            'episodesCount' => $this->adminService->getEpisodesCount(),
            'adminsCount' => $this->adminService->getAdminsCount(),
            'categoriesCount' => $this->adminService->getCategoriesCount(),
        ];

        return $this->adminService->renderAdminIndex($attributes);
    }

    public function admins()
    {
        $attributes = [
            'admins' => $this->adminService->getAllAdmins()
        ];

        return $this->adminService->renderAllAdminsView($attributes);
    }

    public function create()
    {
        return $this->adminService->renderCreateAdminView();
    }

    public function store(CreateAdminRequest $request)
    {
        $result = $this->adminService->storeAdmin($request->validated());

        if ($result instanceof OperationResult) {
            return redirect()->back()->with([
                'message' => $result->getMessage()
            ]);
        }

        return redirect()->route('dashboard.admins')->with([
            'success' => 'Admin created successfully!'
        ]);
    }
}
