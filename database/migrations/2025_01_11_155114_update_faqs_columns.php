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
        Schema::table('f_a_q_s', static function (Blueprint $table) {
            $table->renameColumn('title', 'question');
            $table->renameColumn('description', 'answer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('f_a_q_s', static function (Blueprint $table) {
            $table->renameColumn('question', 'title');
            $table->renameColumn('answer', 'description');
        });
    }
};
