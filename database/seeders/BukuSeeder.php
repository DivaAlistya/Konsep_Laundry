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
        $buku->pengarang = '';
        $buku->judul = '';
        $buku->thn_terbit = '';
        $buku->save();
    }
}
