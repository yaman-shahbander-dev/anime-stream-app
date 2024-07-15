<?php

namespace App\Models\View;

use App\Models\Show\Show;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class View extends Model
{
    use HasFactory;

    protected $table = 'views';

    protected $fillable = ['show_id', 'user_id', 'created_at', 'updated_at'];

    public function show(): BelongsTo
    {
        return $this->belongsTo(Show::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
