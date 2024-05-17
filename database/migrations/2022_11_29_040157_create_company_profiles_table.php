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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id('comp_id');
            $table->string('comp_name_en',100);
            $table->string('comp_name_arb',100);
            $table->text('comp_address');
            $table->string('comp_email1',50);
            $table->string('comp_email2',50);
            $table->string('comp_phone1',20);
            $table->string('comp_phone2',20);
            $table->string('comp_mobile1',20);
            $table->string('comp_mobile2',20);
            $table->string('comp_support_number',20);
            $table->string('comp_hotline_number',20);
            $table->longText('comp_description');
            $table->longText('comp_mission');
            $table->longText('comp_vission');
            $table->string('facebook_url');
            $table->string('linkedin_url');
            $table->string('twitter_url');
            $table->string('whatsapp_num');
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
        Schema::dropIfExists('company_profiles');
    }
};
