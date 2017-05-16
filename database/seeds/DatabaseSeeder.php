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
        $this->call(users::class);
        $this->call(categories::class);
        $this->call(makers::class);
    }
}

class users extends Seeder
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

class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // 0 = user
      // 1 = admin
      // 2 = employee
      DB::table('roles')->insert(
            array(
                    array('role' => 'admin'),
                    array('role' => 'employee'),
                    array('role' => 'user')
            ));
    }
}

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert(
      array(
          'categoryType' => 'cars',
          'active' => true
        )
      );
      DB::table('categories')->insert(
        array(
          'categoryType' => 'compacts',
          'active' => true
        )
      );
      DB::table('categories')->insert(
        array(
          'categoryType' => 'electric',
          'active' => true
        )
      );
      DB::table('categories')->insert(
        array(
          'categoryType' => 'suvs',
          'active' => true
        )
      );
      DB::table('categories')->insert(
        array(
          'categoryType' => 'trucks',
          'active' => true
        )
      );
    }
}

class makers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            //fill makes table
            //ford,gm,dodge... etc

            DB::table('makes')->insert(
              array(
                'make' => 'Ford',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Mercury',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Lincoln',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'GMC',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Cheverlet',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Oldsmobile',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Pontiac',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Cadillac',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Mopar',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Dodge',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Plymoth',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Jeep',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Chrystler',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Nissan',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Toyota',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Honda',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'VW',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'BMW',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Jaguire',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Mozda',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Subaru',
                'active' => true
              )
            );
            DB::table('makes')->insert(
              array(
                'make' => 'Other',
                'active' => true
              )
            );
    }
}
