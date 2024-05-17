<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('job_applicant_infos', function (Blueprint $table) {
            $table->id('job_app_id');
            $table->string('applicant_name');
            $table->string('job_title');
            $table->string('email');
            $table->string('phone');
            $table->string('cv_path');
            $table->date('app_date')->default(date('Y-m-d'));
            $table->integer('experiance_year')->default('0');
            $table->integer('seen_by_id')->default('0');
            $table->boolean('review_status',)->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applicant_infos');
    }
};
