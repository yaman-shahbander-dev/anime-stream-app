<?php

namespace App\Actions\AdminActions;

use App\Enums\OperationResultEnum;
use App\Helpers\OperationResult;
use App\Models\Show\Show;

class CreateShowAction
{
    public function __invoke(array $data, $image)
    {
        if ($image instanceof OperationResult) return $image;

        $show = Show::query()
            ->create([
                'name' => $data['name'],
                'image' => $image,
                'description' => $data['description'],
                'date_aired' => $data['date_aired'],
                'type' => $data['type'],
                'studios' => $data['studios'],
                'status' => $data['status'],
                'genre' => $data['genre'],
                'duration' => $data['duration'],
                'quality' => $data['quality'],
            ]);

        if (!$show) return new OperationResult(OperationResultEnum::FAILURE->value, 'Failed to create the show!');

        return $show;
    }

    private function storeImage($image)
    {
        $destinationPath = 'assets/img/';
        $originalName = $image->getClientOriginalName();
        $result = $image->move(public_path($destinationPath), $originalName);

        if ($result) return $image;
        return new OperationResult(OperationResultEnum::FAILURE->value, 'Failed to store the image!');
    }
}
