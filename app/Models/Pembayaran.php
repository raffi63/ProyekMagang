<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $fillable = [
    'metode',
    'foto',
    'kode_pelanggan'
    ];

    public function fpelanggan(){
    return $this->belongsTo(Pelanggan::class, 'kode_pelanggan', 'kode');
    }
}
