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
        Schema::create('project_infos', function (Blueprint $table) {
            $table->id('proj_id');
            $table->string('proj_name');
            $table->date('starting_date');
            $table->integer('proj_Incharge_id')->nullable();
            $table->longText('proj_description');
            $table->text('address');
            $table->string('proj_code');
            $table->float('proj_budget',14,2);
            $table->date('proj_deadline');
            $table->string('proj_main_thumb',100);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('project_infos');
    }
};
