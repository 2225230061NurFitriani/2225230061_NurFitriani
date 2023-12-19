<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;

    protected $table = 'cafe';

    /**
     * The attributes that are mass asignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
       'nama',
       'alamat',
       'no_telepon',
       'email',
       'tanggal_reservasi',
       'waktu_mulai',
       'waktu_selesai',
       'jumlah_tamu',
       'no_meja'
    ];
}
