<?php

namespace App\Actions\AdminActions;

use App\Enums\OperationResultEnum;
use App\Helpers\OperationResult;
use App\Models\Admin\Admin;

class StoreAdminAction
{
    public function __invoke(array $data)
    {
        $result = Admin::query()
            ->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

        if (!$result) return new OperationResult(OperationResultEnum::FAILURE->value, 'Failed to create the admin!');

        return $result;
    }
}
