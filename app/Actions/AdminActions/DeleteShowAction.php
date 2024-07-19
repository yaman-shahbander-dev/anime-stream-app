<?php

namespace App\Actions\AdminActions;

use App\Enums\OperationResultEnum;
use App\Helpers\OperationResult;

class DeleteShowAction
{
    public function __invoke($show)
    {
        $result = $show->delete();

        if (!$result) return new OperationResult(OperationResultEnum::FAILURE->value, 'Failed to delete the show!');

        return $result;
    }
}
