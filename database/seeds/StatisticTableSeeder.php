<?php

use Illuminate\Database\Seeder;

class StatisticTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\statistic::create([
            'penduduk' => 0,
            'kepala_keluarga' => 0,
            'anggota_keluarga' => 0,
            'male' => 0,
            'female' => 0,
        ]);
    }
}
