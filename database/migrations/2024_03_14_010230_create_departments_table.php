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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('specification_name');
            $table->string('department_definition');
            $table->string('department_message');
            $table->string('department_vision');
            $table->string('department_goals');
            $table->string('minimum_percent')->nullable();
            $table->string('maximum_percent');
            $table->double('price');
            $table->text('image');
            $table->text("file");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
