<?php

use Illuminate\Database\Seeder;
use App\setting;
class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\setting::create([
            'name' => 'Example.com',
            'copyright' => 'Copyright © 2020 All rights reserved',
        ]);
    }
}
