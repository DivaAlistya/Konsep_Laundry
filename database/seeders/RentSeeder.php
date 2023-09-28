<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rent;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rent = new Rent();
        $rent->id_user = '3';
        $rent->id_book = '1';
        $rent->name = 'safa';
        $rent->title = 'algoritma';
        $rent->mobile = '0888';
        $rent->return_date = '2023-06-29';
        $rent->save();
    }
}