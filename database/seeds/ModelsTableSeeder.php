<?php

use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(App\Models\Model\ModelUser::class, 50)->create()->each(function($u) {
            $u->modelProfile()->save(factory(App\Models\Model\ModelProfile::class)->make());
            $u->modelBillingInfo()->save(factory(App\Models\Model\ModelBillingInfo::class)->make());
            $u->modelAlbum()->save(factory(App\Models\Model\ModelAlbum::class)->make());
            $u->modelPicture()->save(factory(App\Models\Model\ModelPicture::class)->make([
                'model_album_id'=>$u->modelAlbum()->pluck('id')->last(),
            ]));
            $u->modelAvatar()->save(factory(App\Models\Model\ModelAvatar::class)->make());
            $u->modelCover()->save(factory(App\Models\Model\ModelCover::class)->make());
        });
    }

}
