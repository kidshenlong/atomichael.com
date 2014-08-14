<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			Post::create([
                'title' => $faker->sentence(5),
                'body' => $faker->paragraph(4),
                'mainImg' => $faker->imageUrl($width = 640, $height = 480, 'cats')
			]);
		}
	}

}