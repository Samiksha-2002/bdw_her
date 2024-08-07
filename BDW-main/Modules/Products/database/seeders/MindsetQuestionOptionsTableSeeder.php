<?php

namespace Modules\Products\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MindsetQuestionOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mindset_question_options')->delete();
        DB::table('mindset_question_options')->insert([
            ['id' => 42, 'question_id' => 2, 'option' => 'I am a giver'],
            ['id' => 43, 'question_id' => 2, 'option' => 'I am a receiver'],
            ['id' => 44, 'question_id' => 2, 'option' => 'It depends'],
            ['id' => 45, 'question_id' => 2, 'option' => 'I seek a Win- Win Situation'],
            ['id' => 48, 'question_id' => 3, 'option' => 'My beliefs are different when I\'m alone than when I’m with people'],
            ['id' => 49, 'question_id' => 3, 'option' => 'My beliefs differ when I\'m with different people'],
            ['id' => 50, 'question_id' => 3, 'option' => 'My beliefs are consistent no matter who\'s watching'],
            ['id' => 51, 'question_id' => 4, 'option' => 'My actions are different when I\'m alone than when I’m with people'],
            ['id' => 52, 'question_id' => 4, 'option' => 'My actions differ when I\'m with different people'],
            ['id' => 53, 'question_id' => 4, 'option' => 'My actions are consistent no matter who\'s watching'],
            ['id' => 57, 'question_id' => 5, 'option' => 'I am engaged / I\'m more of a listener'],
            ['id' => 58, 'question_id' => 5, 'option' => 'I am engaging / I lead the conversation'],
            ['id' => 59, 'question_id' => 6, 'option' => 'Yes'],
            ['id' => 60, 'question_id' => 6, 'option' => 'No'],
            ['id' => 61, 'question_id' => 6, 'option' => 'I\'m new to the concept'],
            ['id' => 68, 'question_id' => 1, 'option' => 'To understand'],
            ['id' => 69, 'question_id' => 1, 'option' => 'To be understood']
        ]);
    }
}
