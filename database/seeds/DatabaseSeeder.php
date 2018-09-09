<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Model::unguard();

		//\ProjectLaravel\Entities\User::truncate();
		//\ProjectLaravel\Entities\Client::truncate();
		//\ProjectLaravel\Entities\Project::truncate();

		$this->call(UserTableSeeder::class );
		$this->call(ClientTableSeeder::class );
		$this->call(ProjectTableSeeder::class );

		Model::reguard();
	}
}
