<?php

namespace Database\Seeders;

use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggaran')->insert([
            'pelanggaran' => 'tidak memakai dasi',
            'sanksi' => 'membersihkan toilet',
            'poin' => '5',
        ]);

        // $pelanggaran =[
        //     "Terlambat", 
        //     "Seragam Tidak Lengkap",
        //     "Tawuran",
        //     "Berbicara Kasar",
        //     "Membuang Sampah Sembarangan"
        // ];

        // $sanksi =[
        //     "puter lapangan",
        //     "starap",
        //     "Sp",
        //     "memberikan peringatan",
        //     "membersikan sampah",
        // ];

        // for($i = 0; $i <= count($pelanggaran); $i++){
        //     data::table('pelanggarans')->insert([
        //         'pelanggaran' => $pelanggaran[$i],
        //         'sanksi' => $sanksi[$i],
        //         'poin' => Arr::random(["10", "20", "30" , "40" ,"50"]),
        //     ]);
        
        // }
    }

}