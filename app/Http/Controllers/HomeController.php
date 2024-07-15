<?php

namespace App\Http\Controllers;

use App\Services\ShowsService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected ShowsService $showsService)
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
        $shows = $this->showsService->getShows();
        $trendingShows = $this->showsService->getTrendingShows();
        $adventureShows = $this->showsService->getAdventureShows();
        $recentShows = $this->showsService->getRecentlyAddedShows();
        $liveShows = $this->showsService->getLiveShows();
        $forYouShows = $this->showsService->getForYouShows();

        return view('home', [
            'shows' => $shows,
            'trendingShows' => $trendingShows,
            'adventureShows' => $adventureShows,
            'recentShows' => $recentShows,
            'liveShows' => $liveShows,
            'forYouShows' => $forYouShows,
        ]);
    }
}
