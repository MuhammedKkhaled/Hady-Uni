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
            $table->longText('department_definition_en')->nullable();
            $table->longText('department_definition_ar')->nullable();
            $table->longText('department_message_en')->nullable();
            $table->longText('department_message_ar')->nullable();
            $table->longText('department_vision_en')->nullable();
            $table->longText('department_vision_ar')->nullable();
            $table->longText('department_goals_en')->nullable();
            $table->longText('department_goals_ar')->nullable();
            $table->longText('department_head_word_en')->nullable();
            $table->longText('department_head_word_ar')->nullable();
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
