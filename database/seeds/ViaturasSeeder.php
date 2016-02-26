<?php

use Illuminate\Database\Seeder;

class ViaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Viaturas', 20)->create();
    }
}
