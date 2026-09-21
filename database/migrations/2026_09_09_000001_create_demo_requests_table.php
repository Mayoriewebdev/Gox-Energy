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
        Schema::create('demo_requests', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('corporate_email');
            $table->string('phone_number');
            $table->string('company_name');
            $table->string('job_title')->nullable();
            $table->string('operating_environment')->nullable();
            $table->json('products')->nullable();
            $table->string('demo_format')->nullable();
            $table->string('demo_timeline')->nullable();
            $table->text('project_details')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demo_requests');
    }
};
