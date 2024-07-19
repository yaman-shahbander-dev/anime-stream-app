<?php

namespace App\Actions\AdminActions;

use App\Enums\OperationResultEnum;
use App\Helpers\OperationResult;
use App\Models\Category\Category;

class CreateGenreAction
{
    public function __invoke(array $data)
    {
        $genre = Category::query()
            ->create([
                'name' => $data['name'],
            ]);

        if (!$genre) return new OperationResult(OperationResultEnum::FAILURE->value, 'Failed to create the genre!');

        return $genre;
    }
}
