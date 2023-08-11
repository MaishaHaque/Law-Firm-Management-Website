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
        Schema::create('case_details', function (Blueprint $table) {
            $table->id();
            $table->string('Client_Name');
            $table->string('Assigned_Lawyer_1_ID')->nullable();
            $table->string('Assigned_Lawyer_2_ID')->nullable();
            $table->string('Paralegal_ID')->nullable();
            $table->string('Client_Email')->nullable();
            $table->string('Opening_Date')->nullable();
            $table->string('Closing_Date')->nullable();
            $table->string('Files')->nullable();
            $table->string('Judge')->nullable();
            $table->string('Opposition_Lawyer')->nullable();
            $table->string('Next_Court_Date')->nullable();
            $table->string('Opposition')->nullable();
            $table->string('Witness')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_details');
    }
};
