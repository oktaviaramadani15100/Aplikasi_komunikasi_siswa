<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\guru;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('gurus')->insert([
            'nama_guru' => $faker->name,
            'matapelajaran' => $faker->randomElement(['agama', 'pkn', 'mtk', 'inggris', 'sunda']),
            'nip' => $faker->randomNumber(5, true),
            'tanggallahir' => $faker->dateTime,
            'jeniskelamin' => $faker->randomElement(['pria', 'wanita']),
            'alamat' => $faker->email,
            'notelepon' => $faker->phoneNumber,
            'email' => $faker->email,
            'password' => 12345,
        ]);
        }

        // guru::factory(5)->create();
        // 'nama_guru' => 'sinta',
        // 'matapelajaran' => 'Multimedia',
        // 'nip' => '12345',
        // 'tanggallahir' => '2022-15-10',
        // 'jeniskelamin' => 'wanita',
        // 'alamat' => 'cibubur',
        // 'notelepon' => '894567',
        // 'email' => 'sinta@gamail.com',
        // 'password' => '2345',
        // 'created_at' => now(),
        // 'updated_at' => now(),
        
    }

