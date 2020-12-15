<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('phone')->nullable();
            $table->string('phone1')->nullable();
            $table->string('sex')->nullable();
            $table->string('star')->nullable();
            $table->string('jathakam')->nullable();
            $table->string('status')->nullable();
            $table->string('dob')->nullable();
            $table->string('age')->nullable();
            $table->string('btime')->nullable();
            $table->string('job')->nullable();
            $table->string('edu')->nullable();
            $table->string('bplace')->nullable();
            $table->string('jloc')->nullable();
            $table->string('res_place')->nullable();
            $table->string('address')->nullable();
            $table->string('formem')->nullable();
            $table->string('prf_ad')->nullable();
            $table->string('last_update')->nullable();
            $table->string('caste')->nullable();
            $table->string('ocast')->nullable();
            $table->string('country')->nullable();
            $table->string('subscribe')->nullable();
            $table->string('height')->nullable();
            $table->string('famstat')->nullable();
            $table->string('btype')->nullable();
            $table->string('otype')->nullable();
            $table->string('skin')->nullable();
            $table->string('hobbie')->nullable();
            $table->string('aboutme')->nullable();
            $table->string('filename')->nullable();
            $table->string('filepath')->nullable();
            $table->string('prf_stat')->nullable();
            $table->string('ad_id')->nullable();
            $table->string('pin')->nullable();
            $table->string('account')->nullable();
            $table->string('payment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_data');
    }
}
