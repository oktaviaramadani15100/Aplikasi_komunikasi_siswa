<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\S;
use App\Models\guru;
use App\Models\Pelanggaran;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Database\Seeders\ClassSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $pelanggaran = [
            "Terlambat", 
            "Seragam Tidak Lengkap",
            "Tawuran",
            "Berbicara Kasar",
            "Membuang Sampah Sembarangan"
        ];

        $sanksi =[
            "puter lapangan",
            "starap",
            "Sp",
            "memberikan peringatan",
            "membersikan sampah",
        ];

        for($i = 0; $i < count($pelanggaran); $i++){
            Pelanggaran::create([
                'pelanggaran' => $pelanggaran[$i],
                'sanksi' => $sanksi[$i],
                'poin' => Arr::random(["10", "20", "30" , "40" ,"50"]),
            ]);
        }

        $this->call([
            SiswaSeeder::class,
            GuruSeeder::class
        ]);
    }

}
