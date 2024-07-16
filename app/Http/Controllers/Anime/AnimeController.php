<?php

namespace App\Http\Controllers\Anime;

use App\Helpers\OperationResult;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\SearchShowsRequest;
use App\Models\Category\Category;
use App\Models\Episode\Episode;
use App\Models\Show\Show;
use App\Services\ShowService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AnimeController extends Controller
{
    public function __construct(protected ShowService $showService) {}

    public function animeDetails(Show $show)
    {
        $randomShows = $this->showService->getRandomShows($show->id);
        $comments = $this->showService->getShowComments($show->id);
        $favorite = $this->showService->checkShowFavoriteStatus($show->id);
        $view = $this->showService->createShowView($show->id);
        $viewsCount = $this->showService->getShowViewsCount($show->id);
        $commentsCount = $this->showService->getShowCommentsCount($show->id);
        $showEpisodeOne = $this->showService->getShowFirstEpisode($show->id);

        $attributes = [
            'show' => $show,
            'randomShows' => $randomShows,
            'comments' => $comments,
            'favorite' => $favorite,
            'viewsCount' => $viewsCount,
            'commentsCount' => $commentsCount,
            'episode' => $showEpisodeOne
        ];

        return $this->showService->renderShowView($attributes);
    }

    public function animeCreate(CreateCommentRequest $request, Show $show)
    {
        $comment = $this->showService->createComment($request->comment, $show);

        if ($comment instanceof OperationResult) {
            return response()->json([
                'message' => $comment->getMessage(),
                'data' => null
            ], Response::HTTP_BAD_REQUEST);
        }

        return redirect()->back()->with(['success' => 'Comment Inserted Successfully!']);
    }

    public function animeFollow(Show $show)
    {
        $result = $this->showService->follow($show);

        if ($result instanceof OperationResult) {
            response()->json([
                'message' => $result->getMessage(),
                'data' => null
            ], Response::HTTP_BAD_REQUEST);
        }

        return redirect()->back()->with(['success' => 'You are following the show!']);
    }

    public function animeWatching(Show $show, Episode $episode)
    {
        $episodes = $this->showService->getShowEpisodes($show->id);
        $comments = $this->showService->getShowComments($show->id);

        $attributes = [
            'show' => $show,
            'episode' => $episode,
            'episodes' => $episodes,
            'comments' => $comments
        ];

        return $this->showService->renderShowWatchingView($attributes);
    }

    public function category(Category $category)
    {
        $shows = $this->showService->getShowsByCategory($category);

        if ($shows != null) {
            $forYouShows = $this->showService->getForYouShowsByCategory($category);

            $attributes = [
                'shows' => $shows,
                'categoryName' => $category->name,
                'forYouShows' => $forYouShows
            ];

            return $this->showService->renderShowsOfCategory($attributes);
        }

        return $shows;
    }

    public function search(SearchShowsRequest $request)
    {
        $shows = $this->showService->searchShows($request->show);

        $attributes = [
            'searches' => $shows
        ];

        return $this->showService->renderSearchView($attributes);
    }
}
