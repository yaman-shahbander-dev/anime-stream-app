<?php

namespace App\Models\Follow;

use App\Models\Show\Show;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Follow extends Model
{
    use HasFactory;

    protected $table = 'follows';

    protected $fillable = ['show_id', 'user_id', 'show_image', 'show_name' ,'created_at', 'updated_at'];

    public function show(): BelongsTo
    {
        return $this->belongsTo(Show::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
