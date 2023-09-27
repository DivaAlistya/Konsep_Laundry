<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = new Buku();
        $buku->id = '2';
        $buku->title = 'Pemrograman web';
        $buku->penerbit = 'Hafiz';
        $buku->tahun_terbit = '2017';
        $buku->save();

        $buku2 = new Buku();
    }
}
