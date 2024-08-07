<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('dob');
            $table->string('type')->default('user')->after('dob');
            $table->string('affirmation')->default("I\'m confident that I will be ")->after('type');
            $table->string('status')->default('1')->comment('1 for active, 2 for blocked')->after('affirmation');
            $table->string('blocked_reason')->nullable()->after('status');
            $table->string('is_mindset_submitted')->default('0')->after('blocked_reason');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->dropColumn('type');
            $table->dropColumn('affirmation');
            $table->dropColumn('status');
            $table->dropColumn('blocked_reason');
            $table->dropColumn('is_mindset_submitted');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('gender');
            $table->dropColumn('dob');
        });
    }
};