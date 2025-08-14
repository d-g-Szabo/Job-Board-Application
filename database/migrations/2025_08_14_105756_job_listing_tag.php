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
        Schema::create('job_listing_tag', function (Blueprint $table){
            $table->foreignId('job_listing_id')->constrained('job_listings')->cascadeOnDelete();                        $table->foreignId('tag_id')->constrained('tags')->cascadeOnDelete();
            $table->primary(['job_listing_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listing_tag');
    }
};
