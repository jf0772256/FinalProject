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
        DB::table('roles')->insert(
                        array(
                                array('role' => 'user'),
                                array('role' => 'admin'),
                                array('role' => 'employee'),
                        ));
        $user_role = DB::table('roles')
                                        ->select('id')
                                        ->where('role', 'user')
                                        ->first()
                                        ->id;

        $admin_role = DB::table('roles')
                                ->select('id')
                                ->where('role', 'admin')
                                ->first()
                                ->id;

        $empl_role  = DB::table('roles')
                                ->select('id')
                                ->where('role', 'employee')
                                ->first()
                                ->id;

        DB::table('users')->insert(
                array(
                          'name' => 'admin',
                          'email' => 'administrator@bobsusedcars.com',
                          'password' => Hash::make('bobsusedcarsadmin'),
                          'roleID'  => $admin_role
                      )
                );
    }
}
