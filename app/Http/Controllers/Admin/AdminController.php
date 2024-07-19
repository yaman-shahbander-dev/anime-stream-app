<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\OperationResult;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\CreateGenreRequest;
use App\Http\Requests\CreateShowRequest;
use App\Http\Requests\LoginAdminRequest;
use App\Models\Category\Category;
use App\Models\Show\Show;
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

    public function shows()
    {
        $attributes = [
            'shows' => $this->adminService->getAllShows()
        ];

        return $this->adminService->renderAdminShowsView($attributes);
    }

    public function createShow()
    {
        $attributes = [
            'categories' => $this->adminService->getAllCategories()
        ];

        return $this->adminService->renderAdminCreateShowView($attributes);
    }

    public function storeShow(CreateShowRequest $request)
    {
        $show = $this->adminService->createShow($request->validated(), $request->file('image'));

        if ($show instanceof OperationResult) {
            return redirect()->back()->with([
                'message' => $show->getMessage()
            ]);
        }

        return redirect()->route('dashboard.admins.shows')->with([
            'success' => 'Show created successfully!'
        ]);
    }

    public function deleteShow(Show $show)
    {
        $result = $this->adminService->deleteShow($show);

        if ($result instanceof OperationResult) {
            return redirect()->back()->with([
                'message' => $result->getMessage()
            ]);
        }

        return redirect()->route('dashboard.admins.shows')->with([
            'success' => 'Show deleted successfully!'
        ]);
    }

    public function genres()
    {
        $attributes = [
            'genres' => $this->adminService->getAllGenres()
        ];

        return $this->adminService->renderAdminGenresView($attributes);
    }

    public function createGenre()
    {
        return $this->adminService->renderAdminCreateGenreView();
    }

    public function storeGenre(CreateGenreRequest $request)
    {
        $genre = $this->adminService->createGenre($request->validated());

        if ($genre instanceof OperationResult) {
            return redirect()->back()->with([
                'message' => $genre->getMessage()
            ]);
        }

        return redirect()->route('dashboard.admins.genres')->with([
            'success' => 'Genre created successfully!'
        ]);
    }

    public function deleteGenre(Category $category)
    {
        $result = $this->adminService->deleteGenre($category);

        if ($result instanceof OperationResult) {
            return redirect()->back()->with([
                'message' => $result->getMessage()
            ]);
        }

        return redirect()->route('dashboard.admins.genres')->with([
            'success' => 'Genre deleted successfully!'
        ]);
    }
}
