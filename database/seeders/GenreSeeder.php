<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = 
         [
            ['genre' => 'African heavy metal'],
            ['genre' => 'African hip hop'],
            ['genre' => 'African popular music'],
            ['genre' => 'Afro pop'],
            ['genre' => 'Afrobeat'],
            ['genre' => 'Afrobeats'],
            ['genre' => 'Amapiano'],
            ['genre' => 'Apala'],
            ['genre' => 'Arabesque'],
            ['genre' => 'Art Punk'],
            ['genre' => 'Alternative Rock'],
            ['genre' => 'Britpunk'],
            ['genre' => 'College Rock'],
            ['genre' => 'Crossover Thrash'],
            ['genre' => 'Crust Punk (thx Haug)'],
            ['genre' => 'Emotional Hardcore (emo / emocore)'],
            ['genre' => 'Experimental Rock'],
            ['genre' => 'Folk Punk'],
            ['genre' => 'Goth / Gothic Rock'],
            ['genre' => 'Grunge'],
            ['genre' => 'Hardcore Punk'],
            ['genre' => 'Hard Rock'],
            ['genre' => 'Indie Rock'],
            ['genre' => 'Lo-fi'],
            ['genre' => 'Musique Concrète'],
            ['genre' => 'Progressive Rock'],
            ['genre' => 'Punk'],
            ['genre' => 'Shoegaze'],
            ['genre' => 'Steampunk'],
            ['genre' => 'Anime'],
            ['genre' => 'Blues'],
            ['genre' => 'Acoustic Blues'],
            ['genre' => 'African Blues'],
            ['genre' => 'Blues Rock'],
            ['genre' => 'Blues Shouter'],
            ['genre' => 'British Blues'],
            ['genre' => 'Canadian Blues'],
            ['genre' => 'Chicago Blues'],
            ['genre' => 'Classic Blues'],
            ['genre' => 'Classic Female Blues'],
            ['genre' => 'Contemporary Blues'],
            ['genre' => 'Contemporary R&B'],
            ['genre' => 'Doom Blues'],
            ['genre' => 'Electric Blues'],
            ['genre' => 'Folk Blues'],
            ['genre' => 'Gospel Blues'],
            ['genre' => 'Harmonica Blues'],
            ['genre' => 'Hill Country Blues'],
            ['genre' => 'Hokum Blues'],
            ['genre' => 'Jazz Blues'],
            ['genre' => 'Jump Blues'],
            ['genre' => 'Kansas City Blues'],
            ['genre' => 'Louisiana Blues'],
            ['genre' => 'Memphis Blues'],
            ['genre' => 'Modern Blues'],
            ['genre' => 'New Orlean Blues'],
            ['genre' => 'NY Blues'],
            ['genre'=>'Country Blues'],
            ['genre'=>'Dark Blues'],
            ['genre'=>'Delta Blues'],
            ['genre'=>'Detroit Blues'],
            ['genre'=>'Piano Blues'],

        ];

        $transformed = $genres;
        //collect($genres)
            // ->map(fn (array $profession) => [
            //     'name' => $profession['name'],
            //     'slug' => str($profession['name'])->slug(),
            // ])->toArray();

        // DB::table('genres')->insertOrIgnore($transformed);
    }
}
