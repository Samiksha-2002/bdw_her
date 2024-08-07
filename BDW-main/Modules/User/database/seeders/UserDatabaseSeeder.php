<?php

namespace Modules\User\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'id' => 21,
                'first_name' => 'admin',
                'last_name' => 'admin',
                'gender' => 'male',
                'dob' => '2022-12-31',
                'email' => 'admin@gmail.com',
                'type' => 'user',
                'email_verified_at' => null,
                'password' => Hash::make('123456'), // Replace 'your_password_here' with the hashed password
                'affirmation' => 'I`m confident that I will be',
                'status' => '1',
                'blocked_reason' => null,
                'is_mindset_submitted' => '0',
                'remember_token' => null,
                'created_at' => '2023-12-12 08:00:14',
                'updated_at' => '2023-12-12 08:00:14',
            ],
            [
                'id' => 33,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'gender' => 'female',
                'dob' => '2000-12-14',
                'email' => 'netflix@gmail.com',
                'type' => 'user',
                'email_verified_at' => null,
                'password' => Hash::make('123456'), // Replace 'your_password_here' with the hashed password
                'affirmation' => 'I`m confident that I can test it.',
                'status' => '1',
                'blocked_reason' => null,
                'is_mindset_submitted' => '1',
                'remember_token' => null,
                'created_at' => '2023-12-13 21:24:23',
                'updated_at' => '2023-12-13 21:34:42',
            ],
            [
                'id' => 34,
                'first_name' => 'sushrut',
                'last_name' => 'nagula',
                'gender' => 'male',
                'dob' => '2001-03-03',
                'email' => 'sushrutnagula@gmail.com',
                'type' => 'user',
                'email_verified_at' => null,
                'password' => Hash::make('123456'), // Replace 'your_password_here' with the hashed password
                'affirmation' => 'I`m confident that I will be',
                'status' => '1',
                'blocked_reason' => null,
                'is_mindset_submitted' => '0',
                'remember_token' => null,
                'created_at' => '2024-02-05 08:22:11',
                'updated_at' => '2024-02-05 08:22:11',
            ],
        ]);
    }
}
