<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		DB::table('answers')->delete();
		// DB::table('endings')->truncate();
		DB::table('questions')->delete();
		// $this->call('UserTableSeeder');
		$this->call('QuestionsSeeder');
		$this->call('AnswersSeeder');
	}

}
