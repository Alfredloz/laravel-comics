<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\FakerComic;
class FakerComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newContact = new FakerComic();
            $newContact->img = $faker->imageUrl(640, 480, 'person', true);
            $newContact->title = $faker->sentence();
            $newContact->about = $faker->text(300);
            $newContact->save();
        }
    }
}
