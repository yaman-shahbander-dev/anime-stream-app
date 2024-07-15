<?php

namespace App\Actions\ShowActions;

use App\Enums\OperationResultEnum;
use App\Helpers\OperationResult;
use App\Models\Follow\Follow;
use App\Models\Show\Show;
use Illuminate\Support\Facades\Auth;

class FollowShowAction
{
    public function __invoke(Show $show)
    {
        $result = Follow::query()
            ->where([
                'show_id' => $show->id,
                'user_id' => Auth::user()->id
            ])
            ->exists();

        if ($result) return new OperationResult(OperationResultEnum::FAILURE->value, 'User Already follows this show!');

        $result = $this->create($show);

        if (!$result) return new OperationResult(OperationResultEnum::FAILURE->value, 'Failed to follow the show!');

        return $result;
    }

    private function create(Show $show)
    {
        return Follow::query()
            ->create([
                   'show_id' => $show->id,
                   'user_id' => Auth::user()->id,
                   'show_image' => $show->image,
                   'show_name' => $show->name
               ]);
    }
}
