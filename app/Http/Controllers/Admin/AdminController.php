<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\OperationResult;
use App\Http\Controllers\Controller;
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
        return $this->adminService->renderAdminIndex();
    }
}
