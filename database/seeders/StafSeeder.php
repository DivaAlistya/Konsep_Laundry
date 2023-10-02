<?php

namespace Database\Seeders;

use App\Models\Staf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StafSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staf = new Staf();
        $staf->id_staf = '001';
        $staf->staf_name = 'safa';
        $staf->mobile = '0888';
        $staf->save();
    }
}