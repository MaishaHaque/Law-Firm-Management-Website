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
        Schema::create('case_lists', function (Blueprint $table) {
            $table->id();
            $table->string('Client_Name');
            $table->string('Assigned_Lawyer_1_ID')->nullable();
            $table->string('Assigned_Lawyer_2_ID')->nullable();
            $table->enum('status',['assigned', 'unassigned'])->default('unassigned');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_lists');
    }
};