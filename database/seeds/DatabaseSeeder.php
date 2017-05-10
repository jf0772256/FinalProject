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
        // 0 = user
        // 1 = admin
        // 2 = employee
        DB::table('roles')->insert(
                        array(
                                array('role' => 'admin'),
                                array('role' => 'employee'),
                                array('role' => 'user')
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
      DB::table('categories')->insert(
      array(
          'categoryType' => 'cars'
        ),
        array(
            'categoryType' => 'compact'
          ),
          array(
              'categoryType' => 'electric'
            ),
            array(
                'categoryType' => 'suv'
              ),
              array(
                  'categoryType' => 'truck'
                )
      );
    }
}
