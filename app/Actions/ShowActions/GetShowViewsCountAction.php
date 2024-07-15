<?php

namespace App\Actions\ShowActions;

use App\Models\View\View;
use Illuminate\Support\Facades\Auth;

class GetShowViewsCountAction
{
    public function __invoke(int $showId)
    {
        return View::query()
            ->where([
                'show_id' => $showId,
                'user_id' => Auth::user()->id
            ])
            ->count();
    }
}
