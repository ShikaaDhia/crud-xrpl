<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vegetables')->insert(array(
            array(
                'nama-sayur' => 'Kol',
                'harga'      => '20000'
            ),
            array(
                'nama-sayur' => 'Toge',
                'harga'      => '22000'
            ),
            array(
                'nama-sayur' => 'Sawi',
                'harga'      => '24000'
            ),
            ));
    }
}
