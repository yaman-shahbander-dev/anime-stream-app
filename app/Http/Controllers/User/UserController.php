<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(protected UserService $userService) {}

    public function followedShows()
    {
        $shows = $this->userService->getFollowedShows();

        $attributes = [
            'shows' => $shows
        ];

        return $this->userService->renderFollowedShows($attributes);
    }
}
