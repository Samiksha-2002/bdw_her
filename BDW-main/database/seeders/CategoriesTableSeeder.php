<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Apathy & Numbness', 'description' => null, 'image' => '', 'parent_id' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 2, 'name' => 'Apathy', 'description' => null, 'image' => '', 'parent_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 3, 'name' => 'Boredom', 'description' => null, 'image' => '', 'parent_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 5, 'name' => 'Complacency', 'description' => null, 'image' => '', 'parent_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 6, 'name' => 'Disinterest & Detachment', 'description' => null, 'image' => '', 'parent_id' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 7, 'name' => 'Disinterest', 'description' => null, 'image' => '', 'parent_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 8, 'name' => 'Detachment', 'description' => null, 'image' => '', 'parent_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 9, 'name' => 'Nonchalance', 'description' => null, 'image' => '', 'parent_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 10, 'name' => 'Emotional Neutrality', 'description' => null, 'image' => '', 'parent_id' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 11, 'name' => 'Indifference', 'description' => null, 'image' => '', 'parent_id' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 12, 'name' => 'Lack of Engagement', 'description' => null, 'image' => '', 'parent_id' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 13, 'name' => 'Passivity', 'description' => null, 'image' => '', 'parent_id' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 14, 'name' => 'Energized', 'description' => null, 'image' => '', 'parent_id' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 15, 'name' => 'Well-rested', 'description' => null, 'image' => '', 'parent_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 16, 'name' => 'Energetic', 'description' => null, 'image' => '', 'parent_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 17, 'name' => 'Motivated', 'description' => null, 'image' => '', 'parent_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 18, 'name' => 'High Spirited', 'description' => null, 'image' => '', 'parent_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 19, 'name' => 'Rejuvenate', 'description' => null, 'image' => '', 'parent_id' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 20, 'name' => 'Relaxed', 'description' => null, 'image' => '', 'parent_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 21, 'name' => 'Zen', 'description' => null, 'image' => '', 'parent_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 22, 'name' => 'Stress-free', 'description' => null, 'image' => '', 'parent_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 23, 'name' => 'Positive Mood', 'description' => null, 'image' => '', 'parent_id' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 24, 'name' => 'Happy', 'description' => null, 'image' => '', 'parent_id' => 23, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 25, 'name' => 'Excited', 'description' => null, 'image' => '', 'parent_id' => 23, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 26, 'name' => 'Hopeful', 'description' => null, 'image' => '', 'parent_id' => 23, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '2'],
            ['id' => 29, 'name' => 'Numbness', 'description' => null, 'image' => '', 'parent_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'group' => '1'],
            ['id' => 30, 'name' => 'Refreshed', 'description' => null, 'image' => '', 'parent_id' => 19, 'created_at' => null, 'updated_at' => null, 'group' => '2'],
            ['id' => 32, 'name' => 'Enthusiastic', 'description' => null, 'image' => '', 'parent_id' => 23, 'created_at' => null, 'updated_at' => null, 'group' => '2'],
            ['id' => 33, 'name' => 'Recharged', 'description' => null, 'image' => '', 'parent_id' => 19, 'created_at' => null, 'updated_at' => null, 'group' => '2'],
            ['id' => 34, 'name' => 'Revived', 'description' => null, 'image' => '', 'parent_id' => 19, 'created_at' => null, 'updated_at' => null, 'group' => '2'],
            ['id' => 35, 'name' => 'Empowered', 'description' => null, 'image' => '', 'parent_id' => 14, 'created_at' => null, 'updated_at' => null, 'group' => '2']
        ]);
    }
}
