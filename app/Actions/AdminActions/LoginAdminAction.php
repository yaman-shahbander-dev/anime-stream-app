<?php

namespace App\Actions\AdminActions;

use App\Enums\OperationResultEnum;
use App\Helpers\OperationResult;
use Illuminate\Support\Facades\Auth;

class LoginAdminAction
{
    public function __invoke(array $data)
    {
        $result = Auth::guard('admin')->attempt($data);

        if (!$result) return new OperationResult(OperationResultEnum::FAILURE->value, 'Failed to login the admin!');

        return $result;
    }
}
