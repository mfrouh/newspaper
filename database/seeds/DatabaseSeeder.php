<?php

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

        $arr=['فن','سياسة','اقتصاد','ميديا','رياضة'];
        foreach ($arr as $key => $value) {
            DB::insert('insert into categories (id, name) values (?, ?)', [$key+1, $value]);
        }
        factory(App\User::class, 50)->create();
        factory(App\article::class, 350)->create();
        factory(App\articleview::class, 550)->create();
        factory(App\tag::class, 550)->create();
    }
}
