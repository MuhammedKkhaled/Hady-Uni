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
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('specification_name_en');
            $table->string('specification_name_ar');
            $table->string('department_definition_en');
            $table->string('department_definition_ar');
            $table->string('department_message_en');
            $table->string('department_message_ar');
            $table->string('department_vision_en');
            $table->string('department_vision_ar');
            $table->string('department_goals_en');
            $table->string('department_goals_ar');
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
