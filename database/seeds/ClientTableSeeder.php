<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		\ProjectLaravel\Entities\Client::truncate();
		factory(\ProjectLaravel\Entities\Client::class , 10)->create();
	}
}
