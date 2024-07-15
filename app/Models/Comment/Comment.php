<?php

namespace App\Models\Comment;

use App\Models\Show\Show;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = ['show_id', 'user_name', 'image', 'comment', 'created_at', 'updated_at'];

    public function show(): BelongsTo
    {
        return $this->belongsTo(Show::class);
    }
}
