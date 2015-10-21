<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faker = Faker\Factory::create();

        // $this->call(UserTableSeeder::class);

        App\category::create(['title'=>'Public']);
        App\category::create(['title'=>'Private']);
        App\category::create(['title'=>'Family']);


        foreach (range (1,100) as $index) {
            # code...

         /*//   DB::table('posts')->insert([
                'title'=> $faker->realText(30,2),
                'content'=> $faker->realText(200,2),
            ]);
        }*/

        App\Post::create([
            'title'=> $faker->realText(30,2),
            'content'=> $faker->realText(100,2),
            'category_id'=> App\category::all()->random()->id
            ]);
        }

        Model::reguard();
    }
}
