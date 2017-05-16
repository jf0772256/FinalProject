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
        $this->call(roles::class);
        DB::table('users')->insert(
                array(
                          'name' => 'admin',
                          'email' => 'administrator@bobsusedcars.com',
                          'password' => Hash::make('bobsusedcarsadmin'),
                          'roleID'  => 1
                      )
                );
        $this->call(categories::class);
        $this->call(makes::class);
    }
}
