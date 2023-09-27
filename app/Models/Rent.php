<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    protected $table = 'pinjam';

    protected $fillable = [
        'id_user',
        'id_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'returned',
    ];

    // Definisikan relasi antara User dan Pinjam
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Definisikan relasi antara Buku dan Pinjam
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}




