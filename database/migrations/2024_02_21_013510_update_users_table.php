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
            $table->string('bio')->after('password')->nullable();
            $table->string('role_id')->after('bio')->nullable();
            $table->string('image')->after('name')->nullable();
            $table->string('song_id')->after('role_id')->nullable();
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
            $table->dropColumn('song_id');
        });
    }
};
