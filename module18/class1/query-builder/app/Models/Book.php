<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PharIo\Manifest\Author;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title','author_id','price'];
    function author():BelongsTo{
        return $this->belongsTo(author::class);
    }
}
