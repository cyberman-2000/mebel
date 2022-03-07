<?php

use Illuminate\Database\Seeder;

class MebelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Mebel::class,6)->create();
    }
}
