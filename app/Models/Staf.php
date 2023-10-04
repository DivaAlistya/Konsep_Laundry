<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    use HasFactory;

    protected $table = 'staf';

    protected $fillable = [
        'staf_name',
    ];

    public function Customers() {
        return $this->hasMany(Customers::class, 'cust_name', 'id_cust');
    }
}
