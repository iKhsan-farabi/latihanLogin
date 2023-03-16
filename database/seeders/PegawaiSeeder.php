<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

        for($i = 1; $i<=50; $i++){

            // insert data dengan faker disini
            DB::table('pegawai')->insert([
                'namaPegawai' => $faker->name,
                'pangkat' => $faker->jobTitle,
                'usia' => $faker->numberBetween(25,40),

            ]);
        }
    }
}
