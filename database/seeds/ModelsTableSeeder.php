<?php

use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(App\Models\Model\Model::class, 50)->create()->each(function($u) {
            $u->profile()->save(factory(App\Models\Model\ModelProfile::class)->make());
            $u->profile()->save(factory(App\Models\Model\ModelBillingInfo::class)->make());
            $u->audio()->save(factory(App\Models\Model\ModelAlbum::class)->make());
            $u->audio()->save(factory(App\Models\Model\ModelPicture::class)->make());
            $u->avatar()->save(factory(App\Models\Model\ModelAvatar::class)->make());
            $u->cover()->save(factory(App\Models\Model\ModelCover::class)->make());
        });
    }

}
