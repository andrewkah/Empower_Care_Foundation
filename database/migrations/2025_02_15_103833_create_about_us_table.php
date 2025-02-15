<?php

use App\Models\AboutUs;
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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->longText('about_intro')->nullable();
            $table->longText('about_intro_images')->nullable();
            $table->string('about_title')->nullable();
            $table->longText('about_content')->nullable();
            $table->longText('about_content_images')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        AboutUs::create([
            'about_intro' => 'We are a non-profit organization that is dedicated to providing support to the less privileged in the society. We are committed to making the world a better place for everyone.',
            'about_intro_images' => '["about_intro_images/1.jpg","about_intro_images/2.jpg","about_intro_images/3.jpg"]',
            'about_title' => 'About Us',
            'about_content' => 'We are a non-profit organization that is dedicated to providing support to the less privileged in the society. We are committed to making the world a better place for everyone. We are a non-profit organization that is dedicated to providing support to the less privileged in the society. We are committed to making the world a better place for everyone. We are a non-profit organization that is dedicated to providing support to the less privileged in the society. We are committed to making the world a better place for everyone.',
            'about_content_images' => '["about_content_images/1.jpg","about_content_images/2.jpg","about_content_images/3.jpg"]',
            'created_by' => 1,           
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
