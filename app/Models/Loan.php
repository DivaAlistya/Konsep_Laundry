<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'loan';

    protected $fillable = [
        'name',
        'title',
        'mobile',
        'year_publ',
    ];

    // Definisikan relasi antara User dan Pinjam
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_user');
    }

    // Definisikan relasi antara Buku dan Pinjam
    public function book()
    {
        return $this->belongsTo(Book::class, 'id_book');
    }
}