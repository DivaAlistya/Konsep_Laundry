<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Orders;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = new Orders();
        $orders->order_id = '3';
        $orders->order_date = '2023-06-29';
        $orders->cust_name = 'safa';
        $orders->cust_staf = 'bayu';
        $orders->type = 'cuci kering';
        $orders->kg = '3';
        $orders->price = '50000';
        $orders->status = 'Proses';
        $orders->save();
    }
}