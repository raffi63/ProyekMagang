<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $fillable = [
    'kode',
    'status',
    'id_users'
    ];

    public function fusers(){
    return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
