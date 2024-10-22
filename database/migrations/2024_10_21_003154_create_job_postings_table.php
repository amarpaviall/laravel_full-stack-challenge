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
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->onDelete('cascade'); // Relationship with company
            $table->string('title');
            $table->string('location');
            $table->string('position_type'); // e.g., 'remote', 'in-person'
            $table->decimal('salary', 10, 2)->nullable();
            $table->tinyInteger('status')->default(1); // 1 = active, 0 = inactive
            $table->text('description');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
};
