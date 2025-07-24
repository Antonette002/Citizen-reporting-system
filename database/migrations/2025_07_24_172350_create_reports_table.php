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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('description');
            $table->string('latitude');
            $table->string('longitude');
            $table->enum('category',
             ['garbage', 
             'blocked drainage',
             'potholes',
             'floods',
             'illegal settlement',
             'unauthorized construction',
            'other']);
            $table->string('image_path');
            $table->enum('status', ['pending', 'in_progress', 'resolved'])->default('pending');
            $table->enum('priority', ['low', 'medium','high']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
