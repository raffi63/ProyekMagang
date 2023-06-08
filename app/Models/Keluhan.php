<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected $table = 'keluhan';
    protected $fillable = [
    'namapelanggan',
    'penyedia',
    'keterangan',
    'waktu_visit',
    'action_keterangan',
    'waktu_selesai',
    'teknisi',
    'status'
    ];
}
