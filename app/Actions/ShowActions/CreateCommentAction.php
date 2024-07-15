<?php

namespace App\Actions\ShowActions;

use App\Enums\OperationResultEnum;
use App\Helpers\OperationResult;
use App\Models\Comment\Comment;
use App\Models\Show\Show;
use Illuminate\Support\Facades\Auth;

class CreateCommentAction
{
    public function __invoke(string $comment, Show $show)
    {
        $result = Comment::query()
            ->create([
                'show_id' => $show->id,
                'user_name' => Auth::user()->name,
                'image' => Auth::user()->image,
                'comment' => $comment
            ]);

        if (!$result) return new OperationResult(OperationResultEnum::FAILURE->value, 'Failed to create the comment!');

        return $result;
    }
}
