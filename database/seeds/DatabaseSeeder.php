<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	protected $toTruncate = ['roles','users'];
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		foreach ($this->toTruncate as $table)
		{
			DB::table($table)->truncate();
		}

		$this->call(RolesTableSeeder::class);
		//$this->call(UsersTableSeeder::class);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
