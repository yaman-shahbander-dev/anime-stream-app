<?php

namespace App\Models\Show;

use App\Models\Comment\Comment;
use App\Models\Follow\Follow;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Show extends Model
{
    use HasFactory;

    protected $table = 'shows';

    protected $fillable = [
        "name",
        "image",
        "description",
        "type",
        "studios",
        "date_aired",
        "status",
        "genre",
        "duration",
        "quality",
        "created_at",
        "updated_at"
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function follows(): HasMany
    {
        return $this->hasMany(Follow::class);
    }
}
