<?php

namespace App\Actions\ShowActions;

use App\Models\Comment\Comment;

class GetShowCommentsAction
{
    public function __invoke(int $id)
    {
        return Comment::query()
            ->where('show_id', $id)
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();
    }
}
