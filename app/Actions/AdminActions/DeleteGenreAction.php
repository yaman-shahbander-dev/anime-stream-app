<?php

namespace App\Actions\AdminActions;

use App\Enums\OperationResultEnum;
use App\Helpers\OperationResult;

class DeleteGenreAction
{
    public function __invoke($genre)
    {
        $result = $genre->delete();

        if (!$result) return new OperationResult(OperationResultEnum::FAILURE->value, 'Failed to delete the genre!');

        return $result;
    }
}
