<?php

namespace App\Actions\ShowActions;

use App\Models\Comment\Comment;

class GetShowCommentsCountAction
{
    public function __invoke(int $showId)
    {
        return Comment::query()
            ->where([
                'show_id' => $showId,
            ])
            ->count();
    }
}
