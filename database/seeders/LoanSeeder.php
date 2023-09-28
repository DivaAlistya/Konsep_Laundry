<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Loan;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loan = new Loan();
        $loan->id_user = '3';
        $loan->id_book = '1';
        $loan->name = 'safa';
        $loan->title = 'algoritma';
        $loan->mobile = '0888';
        $loan->return_date = '2023-06-29';
        $loan->save();
    }
}