<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(App\Models\Artist::class, 50)->create()->each(function($u) {
            $u->profile()->save(factory(App\Models\Profile::class)->make());
            $u->audio()->save(factory(App\Models\Audio::class)->make());
            $u->avatar()->save(factory(App\Models\Avatar::class)->make());
            $u->cover()->save(factory(App\Models\Cover::class)->make());
        });
    }

}
