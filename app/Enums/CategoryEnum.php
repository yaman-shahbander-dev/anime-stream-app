<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum CategoryEnum: string
{
    use EnumHelper;

    case ADVENTURE = 'adventure';
    case ACTION = 'action';
    case MAGIC = 'magic';
    case ROMANCE = 'romance';
}
