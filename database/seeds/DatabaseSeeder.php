<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert(
                array(
                          'name' => 'admin',
                          'email' => 'administrator@bobsusedcars.com',
                          'password' => Hash::make('bobsusedcarsadmin'),
                          'roleID'  => 1
                      )
                );

    }
}
