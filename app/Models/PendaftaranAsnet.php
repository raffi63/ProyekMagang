<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranAsnet extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran_asnet';
    protected $fillable = [
    'namaperusahaan',
    'pic',
    'kontakpic',
    'bandwidth',
    'survey',
    'kabel',
    'status'
    ];
}
