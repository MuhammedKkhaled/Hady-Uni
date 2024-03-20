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
        Schema::create('affiliates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained('departments')->cascadeOnDelete();
            $table->string("name_en");
            $table->string("name_ar");
            $table->string("certificate_en");
            $table->string("certificate_ar");
            $table->string("general_specialization_en");
            $table->string("general_specialization_ar");
            $table->string("special_specialization_en");
            $table->string("special_specialization_ar");
            $table->string("title_en");
            $table->string("title_ar");
            $table->string("notes_en");
            $table->string("notes_ar");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliates');
    }
};
