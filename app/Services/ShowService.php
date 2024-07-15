<?php

namespace App\Services;


use App\Actions\ShowActions\CheckShowFavoriteStatusAction;
use App\Actions\ShowActions\CreateCommentAction;
use App\Actions\ShowActions\CreateShowViewAction;
use App\Actions\ShowActions\FollowShowAction;
use App\Actions\ShowActions\GetRandomShowsAction;
use App\Actions\ShowActions\GetShowCommentsAction;
use App\Actions\ShowActions\GetShowCommentsCountAction;
use App\Actions\ShowActions\GetShowEpisodesAction;
use App\Actions\ShowActions\GetShowFirstEpisodeCountAction;
use App\Actions\ShowActions\GetShowViewsCountAction;
use App\Actions\ShowActions\RenderAnimeDetailsViewAction;
use App\Actions\ShowActions\RenderAnimeWatchingViewAction;
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

    public function follow(int $showId)
    {
        return app(FollowShowAction::class)($showId);
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
}
