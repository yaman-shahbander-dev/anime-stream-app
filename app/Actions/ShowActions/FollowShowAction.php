<?php

namespace App\Actions\ShowActions;

use App\Enums\OperationResultEnum;
use App\Helpers\OperationResult;
use App\Models\Follow\Follow;
use Illuminate\Support\Facades\Auth;

class FollowShowAction
{
    public function __invoke(int $showId)
    {
        $result = Follow::query()
            ->where([
                'show_id' => $showId,
                'user_id' => Auth::user()->id
            ])
            ->exists();

        if ($result) return new OperationResult(OperationResultEnum::FAILURE->value, 'User Already follows this show!');

        $result = $this->create($showId);

        if (!$result) return new OperationResult(OperationResultEnum::FAILURE->value, 'Failed to follow the show!');

        return $result;
    }

    private function create(int $showId)
    {
        return Follow::query()
            ->create([
                   'show_id' => $showId,
                   'user_id' => Auth::user()->id
               ]);
    }
}
