<?php

use Illuminate\Database\Seeder;

class BandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Band::class, 5)->create()->each(function($band) {
            $band->albums()->saveMany(factory(App\Album::class, 3)->make());
            $band->albums()->each(function($album) {
                $album->songs()->saveMany(factory(App\Song::class, 10)->make());
            });
        });
    }
}
