<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $fillable = [
        'name',
        'mobile',
    ];

    public function Buku() {
        return $this->hasMany(Buku::class, 'judul', 'id_bu');
    }
}
