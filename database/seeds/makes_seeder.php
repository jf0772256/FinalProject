<?php

use Illuminate\Database\Seeder;

class makes_seeder extends Seeder
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
