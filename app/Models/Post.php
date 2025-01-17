<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'tags' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function kategori() : BelongsTo 
    {
        return $this->belongsTo(Kategori::class);    
    }

    public function author() : BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function tags() : HasMany 
    {
        return $this->hasMany(Tag::class);
    }

}
