<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'latitude',
        'longitude',
        'tanggal',
        'masuk',
        'pulang',
        'created_at'
    ];

    /**
     * Get the user that owns the presensi.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
