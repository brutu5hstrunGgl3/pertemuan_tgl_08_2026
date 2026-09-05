<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['user_id', 'waktu_datang', 'waktu_pulang', 'shift', 'keterangan'])]
class Absensi extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
