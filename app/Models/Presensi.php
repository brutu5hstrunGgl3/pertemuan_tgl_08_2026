<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    /** @use HasFactory<\Database\Factories\PresensiFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tanggal_masuk',
        'tanggal_pulang',
        'jam_masuk',
        'jam_pulang',
        'shift',
        'keterlambatan',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}



   