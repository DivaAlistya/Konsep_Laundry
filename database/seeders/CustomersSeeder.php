<?php

namespace Database\Seeders;

use App\Models\Customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = new Customers();
        $customers->id_cust = '1';
        $customers->cust_name = 'zaki';
        $customers->address = 'madiun';
        $customers->phone_number = '088899';
        $customers->save();
    }
}