<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();//import library faker
		
		$limit = 5;// batasan berapa banyak  data
		
		for($i = 0;$i < $limit;$i++){
			DB::table('mahasiswa')->insert ([//mengisi data di database
			'nama'=> $faker->name,
			'email'=> $faker->unique()->email,//email unique sehingga tidak ada yang sama
			'no_telp'=> $faker->phoneNumber,
			'alamat'=> $faker->address,
			]);
		}
	}
}