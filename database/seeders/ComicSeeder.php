<?php

namespace Database\Seeders;

use App\Models\ComicBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $data = config('data');


        foreach ($data as $comic) {
            $comicBook = new ComicBook();

            $comicBook->title = $comic['title'];
            $comicBook->description = $comic['description'];
            $comicBook->price = $comic['price'];
            $comicBook->series = $comic['series'];
            $comicBook->sale_date = $comic['sale_date'];
            $comicBook->type = $comic['type'];

            $comicBook->save();
        }
    }
}
