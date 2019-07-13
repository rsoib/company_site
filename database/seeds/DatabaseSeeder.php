<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

    	for ($i=1; $i < 8; $i++) { 
            DB::table('features')->insert([
            'title' => 'Fast',
            'text' => 'If you are looking for a new way to promote your business that',
            'icon' => 'fa fa-rocket	',
            
    
        ]);
        }
    }
}
