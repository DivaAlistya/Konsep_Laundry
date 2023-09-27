<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'pengarang',
        'judul',
        'thn_terbit',
    ];

    public function Users() {
        return $this->belongsTo(Users::class, 'judul', 'id_bu');
    }

}
