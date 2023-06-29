<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hamstertype;


class HamstertypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Hamstertype::create([
            'type' => 'ゴールデンハムスター',
        ]);
        Hamstertype::create([
            'type' => 'ジャンガリアンハムスター',
        ]);
    }
}
