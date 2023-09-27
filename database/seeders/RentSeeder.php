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
        $rent->name = '';
        $rent->judul = '';
        $rent->mobile = '';
        $rent->tgl_kembali = '';
        $rent->save();
    }
}
