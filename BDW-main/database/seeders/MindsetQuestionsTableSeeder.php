<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MindsetQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mindset_questions')->insert([
            [
                'id' => 1, 
                'question' => 'Which of these is a priority to you?', 
                'image' => 'https://127.0.0.1:8080/storage/images/question/image/1HMj6qMb4OAyyx3Ep9krQEuFKtisQO2XNlFikzoN.png', 
                'is_enable' => 1, 
                'created_at' => Carbon::parse('2023-12-07 16:44:15'), 
                'updated_at' => Carbon::parse('2023-12-08 06:54:14')
            ],
            [
                'id' => 2, 
                'question' => 'Which sounds more like you?', 
                'image' => 'https://127.0.0.1:8080/storage/images/question/image/ZLdziGZhlwXuKIRBmdk9crJ7sObdxJH4lov0SXMU.png', 
                'is_enable' => 1, 
                'created_at' => null, 
                'updated_at' => Carbon::parse('2023-12-07 20:41:53')
            ],
            [
                'id' => 3, 
                'question' => 'Do you experience the observer-effect?', 
                'image' => 'https://127.0.0.1:8080/storage/images/question/image/JygeHzWHAznavKv24hYbl2x4eTDRxTYQJGTlOw3Y.png', 
                'is_enable' => 1, 
                'created_at' => null, 
                'updated_at' => Carbon::parse('2023-12-07 20:49:30')
            ],
            [
                'id' => 4, 
                'question' => 'Do you experience the observer-effect?', 
                'image' => 'https://127.0.0.1:8080/storage/images/question/image/4aXF3O8BdS49y9apQNvRSRIBLAXLygzxC3sPQIcD.png', 
                'is_enable' => 1, 
                'created_at' => Carbon::parse('2023-12-07 16:43:12'), 
                'updated_at' => Carbon::parse('2023-12-07 16:43:12')
            ],
            [
                'id' => 5, 
                'question' => 'When meeting someone new I___', 
                'image' => 'https://127.0.0.1:8080/storage/images/question/image/Htv8oNVCQM0hmMEw0aiHY3jcWKbvSdbGiH9aTPZh.png', 
                'is_enable' => 1, 
                'created_at' => Carbon::parse('2023-12-07 16:41:27'), 
                'updated_at' => Carbon::parse('2023-12-07 16:41:27')
            ],
            [
                'id' => 6, 
                'question' => 'Do you believe in daily self-reflection for personal growth?', 
                'image' => 'https://127.0.0.1:8080/storage/images/question/image/1pzGjdVzioQWR6uV7yHUTxEfXvqU5zAr4zWKquPJ.png', 
                'is_enable' => 1, 
                'created_at' => null, 
                'updated_at' => Carbon::parse('2023-12-07 20:52:28')
            ]
        ]);
    }
}
