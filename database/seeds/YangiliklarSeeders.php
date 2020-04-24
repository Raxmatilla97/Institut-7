<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\user;
use App\Kafedralar;
use App\ArticleCategory;
use App\Role;


class YangiliklarSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Raxmatilla',
            'email' => 'wi.fi.xor@gmail.com',
            'password' => Hash::make('5579187Er'),
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Developer',
            'slug' => 'developer',
           
        ]);

        DB::table('users_roles')->insert([
            'user_id' => '1',
            'role_id' => '1',
           
        ]);
        factory(App\ArticleCategory::class, 10)->create();
        factory(App\Kafedralar::class, 20)->create();
        factory(App\User::class, 30)->create();
        factory(App\Article::class, 30)->create();
        factory(App\Role::class, 10)->create();
        factory(App\Permission::class, 20)->create();
        factory(App\UserRole::class, 10)->create();
        factory(App\PosterCategory::class, 11)->create();
        factory(App\Poster::class, 20)->create();
        

       
    }
}
