<?php

namespace Database\Factories;

namespace Database\Factories;
use Carbon\Carbon;
use App\Models\guru;
use Faker\Factory as faker;
use Illuminate\Support\Arr;use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // return [
        //     'nama_guru' => $this->faker->name(),
        //     'matapelajaran' => $this->faker->randomElement(['agama', 'pkn', 'mtk', 'inggris', 'sunda']),
        //     'nip' => mt_rand(00001, 99999),
        //     'tanggallahir' => $this->faker->dateTimeBetween("2005-01-01", "2006-12-31"),
        //     'jeniskelamin' => $this->faker->randomElement(['pria', 'wanita']),
        //     'alamat' => $this->faker->address(),
        //     'notelepon' => $this->faker->phoneNumber(),
        //     'password' => Hash::make("123"),
        //     'email' => preg_replace('/@example\../','@gmail.com',$this->faker->unique()->safeEmail),
        // ];

        $faker = faker::create();
        guru::insert([
            'nama_guru' => $faker->name(),
            'matapelajaran' => $faker->randomElement(['agama', 'pkn', 'mtk', 'inggris', 'sunda']),
            'nip' => $faker->randomNumber(5, true),
            'tanggallahir' => $faker->dateTime(),
            'jeniskelamin' => $faker->randomElement(['pria', 'wanita']),
            'alamat' => $faker->email(),
            'notelepon' => $faker->phoneNumber(),
            'email' => $faker->email(),
            'password' => $faker->password(),
        ]);
    }
}
