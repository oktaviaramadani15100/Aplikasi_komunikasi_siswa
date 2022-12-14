<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Siswa;
use Faker\Factory as faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('siswas')->insert([
            'nama' => $faker->name,
            'kelas' => $faker->randomElement(['11', '10', '12']),
            'jurusan' => $faker->randomElement(['PPLG','MULTIMUDIA', 'TJKT', 'BRODCASTING', 'TEI']),
            'nisn' => $faker->randomNumber(5, true),
            'jeniskelamin' => $faker->randomElement(['pria', 'wanita']),
            'alamat' => $faker->address,
            'notelepon' => $faker->randomNumber(8, true),
            'email' => $faker->safeEmail,
            'password' => 12345,
            'guru_id' => 1,
        ]);

        // DB::table('siswas')->insert([
        //     'nama'=> $faker->name(),
        //     'kelas'=> $faker->word(),
        //     'jurusan'=> $faker->randomElements(['PPLG','TJKT','BRODCASTING','MULTIMEDIA']),
        //     'nisn'=> $faker->randomNumber(5, true),
        //     'jeniskelamin'=> $faker->randomElement(['pria','wanita']),
        //     'alamat'=> $faker->address(),
        //     'notelepon'=> $faker->randomNumber(),
        //     'email'=> $faker->email(),
        //     'password'=> $faker->password(),                     
        // ]);
        
        // $faker = Faker::create('id_ID');
        // for($i=1; $i <= 5; $i++){
        //     Siswa::create([
        //         'nama' => $faker->name,
        //         'kelas' => $faker->randomElement(['10', '11', '12']),
        //         'jurusan' => $faker->randomElement(['PPLG', 'MULTIMEDIA', 'TJKT', 'BRODCASTING', 'TEI']),
        //         'nisn' => $faker->numberBetween(6904700,6905000),
        //         'jeniskelamin' =>$faker->random_Element(['pria', 'wanita']),
        //         'alamat' => $faker->address(),
        //         'notelepon' => $faker->numberBetween(81299161053,81299200000),
        //         'email' => preg_replace('/@example\../','@gmail.com',$faker->uniqui()->safeEmail),
        //         'password' => $faker->password,
        //         'walikelas' => $faker->walikelas,
        //         'created_at' => now(),
        //         'updated_at' => now(),
                
        //     ]);
        
        // Schema::disableForeignKeyConstraints();

        // Siswa::truncate();
        
        // Schema::enableForeignKeyConstraints();
        // Siswa::factory()->count(10)->create();

       
    }
}

