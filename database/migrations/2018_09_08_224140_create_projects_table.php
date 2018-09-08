<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateProjectsTable.
 */

class CreateProjectsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('projects', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('owner_id')->unsigned();
				$table->foreign('owner_id')->references('id')->on('users');
				$table->integer('client_id')->unsigned();
				$table->foreign('client_id')->references('id')->on('clients');
				$table->string('name');
				$table->text('description');
				$table->smallInteger('progress');
				$table->smallInteger('status');
				$table->date('due_date');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('projects');
	}
}
