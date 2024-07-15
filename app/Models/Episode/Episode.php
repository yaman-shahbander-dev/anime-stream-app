<?php

namespace App\Models\Episode;

use App\Models\Show\Show;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episode extends Model
{
    use HasFactory;

    protected $table = 'episodes';

    protected $fillable = ['show_id', 'name', 'video', 'thumbnail', 'created_at', 'updated_at'];

    public function show(): BelongsTo
    {
        return $this->belongsTo(Show::class);
    }
}
