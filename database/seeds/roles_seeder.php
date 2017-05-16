<?php

use Illuminate\Database\Seeder;

class roles_seeder extends Seeder
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
