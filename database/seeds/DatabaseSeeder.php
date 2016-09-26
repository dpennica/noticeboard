<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('NoticeTableSeeder');
        //
        factory(App\Models\Notice::class, 10)->create();
    }
}
