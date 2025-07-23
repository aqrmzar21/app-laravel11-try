<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Arr;

class Post extends Model
// class Post
{
    use HasFactory;
    // cara buat Eager Load
    protected $with = ['penulis', 'kategori']; // konsukuensi untuk looping data yang banyak

    protected $table = 'posts';
    protected $fillable =
    [
        'uuid',
        'topik',
        // 'penulis',
        'kategori_id',
        'penulis_id',
        'isi'
    ];

    // Membuat relasi table
    public function penulis(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}
