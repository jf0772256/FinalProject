<?php

use Illuminate\Database\Seeder;

class categories_seeder extends Seeder
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
