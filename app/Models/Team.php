<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Team extends Model
{
    use HasFactory;
    protected $table = 'team';
    protected $fillable = ['uuid', 'nama', 'nopung', 'klub'];
    // protected $primaryKey = 'id';
    
    /**
     * The "booted" method of the model.
     */
    protected static function booted()
    {
        static::creating(function ($team) {
            // Hanya tambahkan UUID jika field 'uuid' belum terisi
            if (empty($team->uuid)) {
                $team->uuid = Str::uuid()->toString();
            }
        });
    }
}
