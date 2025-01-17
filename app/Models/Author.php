<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jabatan',
        'gambar'
    ];

    public function post() : HasMany 
    {
        return $this->hasMany(Post::class);
    }

    public function video() : HasMany 
    {
        return $this->hasMany(Video::class);    
    }
}
