<?php

namespace Modules\Type\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->delete();
        DB::table('types')->insert([
            [
                'id' => 3,
                'name' => 'video',
                'created_at' => '2023-11-30 12:02:42',
                'updated_at' => '2023-11-30 12:02:42',
            ],
            [
                'id' => 4,
                'name' => 'Books & Audiobooks',
                'created_at' => '2023-11-30 12:02:56',
                'updated_at' => '2023-11-30 12:04:54',
            ],
            [
                'id' => 5,
                'name' => 'Podcasts',
                'created_at' => '2023-11-30 12:04:02',
                'updated_at' => '2023-11-30 12:04:02',
            ],
        ]);
    }
}
