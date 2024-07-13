<?php

namespace App\Http\Controllers;

use App\Services\ShowService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected ShowService $showService)
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $shows = $this->showService->getShows();

        return view('home', [
            'shows' => $shows
        ]);
    }
}
