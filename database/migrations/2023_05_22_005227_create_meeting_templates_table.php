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
        Schema::create('meeting_templates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('scope');
            $table->boolean('is_default')->default(false);
            $table->string('title')->nullable();
            $table->timestamps();
        });

        Schema::create('meeting_template_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meeting_template_id')->constrained();
            $table->text('description')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_template_items');
        Schema::dropIfExists('meeting_templates');
    }
};
