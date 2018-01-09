<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();
        $this->call(ArtistsTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(ModelsTableSeeder::class);
        Model::reguard();
    }

}
