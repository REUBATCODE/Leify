<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users',function($table){
            $table->string('bio')->after('password');
            $table->string('role_id')->after('bio');
            $table->string('image')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('bio');
            $table->dropColumn('role_id');
            $table->dropColumn('image');
        });
    }
};