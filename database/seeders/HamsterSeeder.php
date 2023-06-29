<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hamster;

class HamsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Hamster::create([
            'name' => ' まさこ',
            'user_id' => 1,
            'sex' => 1,
            'type_id' => 1,
            'birthday' => '2022/4/4',
            'introduce' => 'これはテストですよ',
        ]);
    }
}
