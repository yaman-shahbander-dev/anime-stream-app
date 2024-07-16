<?php

namespace App\Actions\ShowActions;

use App\Enums\OperationResultEnum;
use App\Helpers\OperationResult;
use App\Models\Follow\Follow;
use App\Models\View\View;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class CreateShowViewAction
{
    public function __invoke(int $showId)
    {
        $user = Auth::user();

        $result = $user && View::query()
            ->where([
                'show_id' => $showId,
                'user_id' => $user->id
            ])
            ->exists();

        if ($result) return new OperationResult(OperationResultEnum::FAILURE->value, 'User Already viewed this show!');

        $result = $this->create($showId, $user);

        if (!$result) return new OperationResult(OperationResultEnum::FAILURE->value, 'Failed to create a new view!');

        return $result;
    }

    private function create(int $showId, Authenticatable $user = null)
    {
        return $user && View::query()
            ->create([
                'show_id' => $showId,
                'user_id' => $user->id
            ]);
    }
}
