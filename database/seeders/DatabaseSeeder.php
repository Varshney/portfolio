<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        \App\Models\ArticleType::factory(10)->create();
        \App\Models\Company::factory(10)->create();
        \App\Models\Image::factory(10)->create();
        \App\Models\ImageType::factory(10)->create();
        \App\Models\Role::factory(10)->create();
        \App\Models\Social::factory(10)->create();
        \App\Models\Software::factory(10)->create();
    }
}
