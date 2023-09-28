<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book';

    protected $fillable = [
        'author',
        'title',
        'year_publ',
    ];

    public function Pengguna() {
        return $this->belongsTo(Pengguna::class, 'title', 'id_book');
    }

}