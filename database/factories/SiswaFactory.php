<?php

namespace Database\Factories;
use Carbon\Carbon;
use Faker\Factory as faker;
use Illuminate\Support\Arr;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker =faker::create();
        return [
            'nama'=> $faker->name(),
            'kelas'=> $faker->word(),
            'jurusan'=> $faker->randomElements(['PPLG','TJKT','BRODCASTING','MULTIMEDIA']),
            'nisn'=> $faker->randomNumber(5, true),
            'jeniskelamin'=> $faker->randomElement(['pria','wanita']),
            'alamat'=> $faker->address(),
            'notelepon'=> $faker->randomNumber(),
            'email'=> $faker->email(),
            'password'=> $faker->password(),
        ];
    }
}
