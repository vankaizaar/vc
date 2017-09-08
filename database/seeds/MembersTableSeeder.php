<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(App\Models\Member\Member::class, 50)->create()->each(function($u) {
            $u->profile()->save(factory(App\Models\Member\MemberProfile::class)->make());
            $u->job()->save(factory(App\Models\Member\Job::class)->make());
            $u->avatar()->save(factory(App\Models\Member\MemberAvatar::class)->make());
            $u->cover()->save(factory(App\Models\Member\MemberCover::class)->make());
        });
    }
}
