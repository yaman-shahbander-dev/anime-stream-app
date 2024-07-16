<?php

namespace App\Services;


use App\Actions\ShowActions\CheckShowFavoriteStatusAction;
use App\Actions\ShowActions\CreateCommentAction;
use App\Actions\ShowActions\CreateShowViewAction;
use App\Actions\ShowActions\FollowShowAction;
use App\Actions\ShowActions\GetForYouShowsByCategoryAction;
use App\Actions\ShowActions\GetRandomShowsAction;
use App\Actions\ShowActions\GetShowCommentsAction;
use App\Actions\ShowActions\GetShowCommentsCountAction;
use App\Actions\ShowActions\GetShowEpisodesAction;
use App\Actions\ShowActions\GetShowFirstEpisodeCountAction;
use App\Actions\ShowActions\GetShowsByCategoryAction;
use App\Actions\ShowActions\GetShowViewsCountAction;
use App\Actions\ShowActions\RenderAnimeDetailsViewAction;
use App\Actions\ShowActions\RenderAnimeWatchingViewAction;
use App\Actions\ShowActions\RenderSearchViewAction;
use App\Actions\ShowActions\RenderShowsOfCategoryAction;
use App\Actions\ShowActions\SearchShowsAction;
use App\Models\Category\Category;
use App\Models\Show\Show;

class ShowService
{
    public function renderShowView(array $attributes)
    {
        return app(RenderAnimeDetailsViewAction::class)($attributes);
    }

    public function getRandomShows(int $id)
    {
        return app(GetRandomShowsAction::class)($id);
    }

    public function getShowComments(int $id)
    {
        return app(GetShowCommentsAction::class)($id);
    }

    public function createComment(string $comment, Show $show)
    {
        return app(CreateCommentAction::class)($comment, $show);
    }

    public function follow(Show $show)
    {
        return app(FollowShowAction::class)($show);
    }

    public function checkShowFavoriteStatus(int $showId)
    {
        return app(CheckShowFavoriteStatusAction::class)($showId);
    }

    public function createShowView(int $showId)
    {
        return app(CreateShowViewAction::class)($showId);
    }

    public function getShowViewsCount(int $showId)
    {
        return app(GetShowViewsCountAction::class)($showId);
    }

    public function getShowCommentsCount(int $showId)
    {
        return app(GetShowCommentsCountAction::class)($showId);
    }

    public function getShowFirstEpisode(int $showId)
    {
        return app(GetShowFirstEpisodeCountAction::class)($showId);
    }

    public function getShowEpisodes(int $showId)
    {
        return app(GetShowEpisodesAction::class)($showId);
    }

    public function renderShowWatchingView(array $attributes)
    {
        return app(RenderAnimeWatchingViewAction::class)($attributes);
    }

    public function getShowsByCategory(Category $category)
    {
        return app(GetShowsByCategoryAction::class)($category);
    }

    public function renderShowsOfCategory(array $attributes)
    {
        return app(RenderShowsOfCategoryAction::class)($attributes);
    }

    public function getForYouShowsByCategory(Category $category)
    {
        return app(GetForYouShowsByCategoryAction::class)($category);
    }

    public function searchShows(string $show)
    {
        return app(SearchShowsAction::class)($show);
    }

    public function renderSearchView(array $attributes)
    {
        return app(RenderSearchViewAction::class)($attributes);
    }
}
