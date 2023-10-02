<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'order_date',
        'cust_name',
        'cust_staf',
        'type',
        'kg',
        'price',
        'status',
    ];

    // Definisikan relasi antara User dan Pinjam
    public function staf()
    {
        return $this->belongsTo(Staf::class, 'id_staf');
    }

    // Definisikan relasi antara Buku dan Pinjam
    public function customers()
    {
        return $this->belongsTo(Customers::class, 'id_cust');
    }
}
