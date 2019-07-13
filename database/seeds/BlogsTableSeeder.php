<?php

use Illuminate\Database\Seeder;


class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$faker = Faker\Factory::create();

    	for ($i=1; $i < 8; $i++) { 
            DB::table('blogs')->insert([
            'title' => $faker->title,
            'text' => $faker->text,
            'images' => $faker->imageUrl($width = 640, $height = 480),
            
    
        ]);
        }
        
    }
}
