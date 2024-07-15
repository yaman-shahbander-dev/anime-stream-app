<?php

namespace App\Http\Controllers\Anime;

use App\Http\Controllers\Controller;
use App\Models\Show\Show;
use App\Services\ShowService;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function __construct(protected ShowService $showService) {}

    public function animeDetails(Show $show)
    {
        $randomShows = $this->showService->getRandomShows($show->id);

        $attributes = [
            'show' => $show,
            'randomShows' => $randomShows
        ];

        return $this->showService->renderShowView($attributes);
    }
}
