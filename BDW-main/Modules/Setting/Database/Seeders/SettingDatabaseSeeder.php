<?php

namespace Modules\Setting\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();
        DB::table('settings')->insert([
            [
                'id' => 1,
                'attribute' => 'website_name',
                'label' => 'Website Title',
                'value' => 'BDW',
                'possible_values' => null,
                'type' => 'text',
                'route' => 'admin.settings',
                'sort' => null,
                'is_hidden' => 0,
            ],
            [
                'id' => 2,
                'attribute' => 'logo',
                'label' => 'Logo',
                'value' => 'https://127.0.0.1:8080settings/1701957830.png',
                'possible_values' => null,
                'type' => 'file',
                'route' => 'admin.settings',
                'sort' => null,
                'is_hidden' => 0,
            ],
        ]);
    }
}
