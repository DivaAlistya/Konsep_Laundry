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
        $rent->id_user = '1';
        $rent->id_buku = '3344';
        $rent->title = 'laravel 1';
        $rent->tanggal_pinjam = '2023-10-03';
        $rent->tanggal_kembali = '2023-10-10';
        $rent->save();
    }
}
