<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum GenreEnum: string
{
    use EnumHelper;

    case ADVENTURE = 'adventure';
    case ACTION = 'action';
    case MAGIC = 'magic';
}
