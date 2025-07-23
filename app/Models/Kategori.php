<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $fillable = [
        'list',
    ];

    public function post(): HasMany
    {
        // return $this->hasMany(Post::class)->chaperone();
        return $this->hasMany(Post::class, 'kategori_id');
    }
}
