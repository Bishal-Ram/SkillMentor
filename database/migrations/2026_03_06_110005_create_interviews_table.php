<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('interviews', function (Blueprint $table) {

        $table->id();

        $table->foreignId('candidate_id')
              ->constrained('users')
              ->onDelete('cascade');

        $table->foreignId('mentor_id')
              ->constrained('mentors')
              ->onDelete('cascade');

        $table->foreignId('slot_id')
              ->constrained('interview_slots')
              ->onDelete('cascade');

        $table->string('status')->default('scheduled');

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interviews');
    }
};
