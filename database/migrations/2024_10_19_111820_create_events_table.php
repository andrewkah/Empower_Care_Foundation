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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('summary');
            $table->longText('description')->nullable();
            $table->date('event_date');
            $table->time('event_time'); //00:00:00
            $table->string('organizer');
            $table->string('location');
            $table->string('email');
            $table->string('phone');
            $table->string('website');
            $table->string('sponsor');
            $table->string('event_speaker');
            $table->longText('photo')->nullable();
            $table->string('tags')->nullable();
            $table->unsignedBigInteger('event_cat_id')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
