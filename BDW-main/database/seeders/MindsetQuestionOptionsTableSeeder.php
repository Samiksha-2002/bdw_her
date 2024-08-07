<?php

namespace Database\Seeders;

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
        DB::table('mindset_question_options')->insert([
            ['id' => 25, 'question_id' => 14, 'option' => 'I am a giver'],
            ['id' => 26, 'question_id' => 14, 'option' => 'It depends'],
            ['id' => 27, 'question_id' => 14, 'option' => 'I seek a win - win situation'],
            ['id' => 28, 'question_id' => 14, 'option' => 'I am a receiver'],
            ['id' => 29, 'question_id' => 15, 'option' => 'My beliefs are different when I am alone then when I am with people'],
            ['id' => 30, 'question_id' => 15, 'option' => 'My beliefs differ when I am with different people'],
            ['id' => 31, 'question_id' => 16, 'option' => 'Yes'],
            ['id' => 32, 'question_id' => 16, 'option' => 'No'],
            ['id' => 33, 'question_id' => 16, 'option' => 'I am new to the concept'],
            ['id' => 34, 'question_id' => 17, 'option' => 'I am engaged/ I’m more of a listener'],
            ['id' => 35, 'question_id' => 17, 'option' => 'I am engaging/ I lead the conversation'],
            ['id' => 36, 'question_id' => 18, 'option' => 'Do you experience the observer-effect?'],
            ['id' => 37, 'question_id' => 18, 'option' => 'Do you experience the observer-effect?'],
            ['id' => 38, 'question_id' => 18, 'option' => 'My actions are consistent no matter who’s watching'],
            ['id' => 39, 'question_id' => 19, 'option' => 'To understand'],
            ['id' => 40, 'question_id' => 19, 'option' => 'To be understood'],
            ['id' => 42, 'question_id' => 2, 'option' => 'I am a giver'],
            ['id' => 43, 'question_id' => 2, 'option' => 'I am a receiver'],
            ['id' => 44, 'question_id' => 2, 'option' => 'It depends'],
            ['id' => 45, 'question_id' => 2, 'option' => 'I seek a Win- Win Situation'],
            ['id' => 48, 'question_id' => 3, 'option' => 'My beliefs are different when I’m alone than when I’m with people'],
            ['id' => 49, 'question_id' => 3, 'option' => 'My beliefs differ when I’m with different people'],
            ['id' => 50, 'question_id' => 3, 'option' => 'My beliefs are consistent no matter who’s watching'],
            ['id' => 51, 'question_id' => 4, 'option' => 'My actions are different when I’m alone than when I’m with people'],
            ['id' => 52, 'question_id' => 4, 'option' => 'My actions differ when I’m with different people'],
            ['id' => 53, 'question_id' => 4, 'option' => 'My actions are consistent no matter who’s watching'],
            ['id' => 57, 'question_id' => 5, 'option' => 'I am engaged/ I’m more of a listener'],
            ['id' => 58, 'question_id' => 5, 'option' => 'I am engaging/ I lead the conversation'],
            ['id' => 59, 'question_id' => 6, 'option' => 'Yes'],
            ['id' => 60, 'question_id' => 6, 'option' => 'No'],
            ['id' => 61, 'question_id' => 6, 'option' => 'I’m new to the concept'],
            ['id' => 63, 'question_id' => 21, 'option' => 'Rest'],
            ['id' => 64, 'question_id' => 21, 'option' => 'DD'],
            ['id' => 65, 'question_id' => 22, 'option' => 'S'],
            ['id' => 68, 'question_id' => 1, 'option' => 'To understand'],
            ['id' => 69, 'question_id' => 1, 'option' => 'To be understood']
        ]);
    }
}
