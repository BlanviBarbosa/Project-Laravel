<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		\ProjectLaravel\Client::truncate();
		factory(\ProjectLaravel\Client::class , 10)->create();
	}
}
