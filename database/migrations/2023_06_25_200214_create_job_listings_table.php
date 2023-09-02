<?php

use App\Enums\JobListingStatus;
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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('internal_id')->nullable();
            $table->foreignId('team_id')->nullable()->constrained()->nullOnDelete();
            $table->integer('status')->default(JobListingStatus::OPEN->value);
            $table->boolean('is_private')->default(false);
            $table->timestamps();
        });

        Schema::create('job_listing_user', function (Blueprint $table) {
            $table->foreignId('job_listing_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings_user');
        Schema::dropIfExists('job_listings');
    }
};
