<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'cust_name',
        'address',
        'phone_number',
    ];

    public function Staf() {
        return $this->belongsTo(Staf::class, 'cust_name', 'id_cust');
    }

}