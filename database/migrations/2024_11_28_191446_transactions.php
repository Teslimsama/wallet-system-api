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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Ensures user_id references the users table
            $table->string('type'); // Transaction type: 'funding', 'purchase', etc.
            $table->decimal('amount', 15, 2); // Transaction amount
            $table->text('description')->nullable(); // Optional description
            $table->timestamps();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
