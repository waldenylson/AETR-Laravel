<?php

use Illuminate\Database\Seeder;

class NaturezasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Naturezas', 20)->create();
    }
}
