<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Entities\Base\App as EntityApp;
use App\Entities\Base\User as EntityUser;
use App\Entities\Base\Lang as EntityLang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $app = new EntityApp;
        $app->save();

        $user = new EntityUser;
        $user->name = 'Developer Jr.';
        $user->password = bcrypt('azerty');
        $user->email = 'test@test.com';
        $user->save();

        // LANGS

        $lang = new EntityLang;
        $lang->name = 'English';
        $lang->locale = 'en';
        $lang->save();

        $lang = new EntityLang;
        $lang->name = 'Français';
        $lang->locale = 'fr';
        $lang->save();
    }
}
