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
        Schema::create('job_circular_infos', function (Blueprint $table) {
            $table->id('jobCircularId');
            $table->unsignedBigInteger('jobtitleId');
            $table->date('openingDate');
            $table->date('closingDate');
            $table->integer('noOfVacancy');
            $table->integer('approvedById');
            $table->boolean('status', ['1', '0'])->default('1');
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
        Schema::dropIfExists('job_circular_infos');
    }
};
