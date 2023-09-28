<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';

    protected $fillable = [
        'name',
        'mobile',
    ];

    public function Book() {
        return $this->hasMany(Book::class, 'title', 'id_book');
    }
}