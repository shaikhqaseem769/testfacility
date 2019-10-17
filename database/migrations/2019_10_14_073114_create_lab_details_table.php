<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_details', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('id')->primary();
            $table->string('user_id');
            $table->string('organisation_name')->nullable();
            $table->string('email_id_of_stablishment')->nullable();
            // $table->string('email_id_cno')->unique();
            $table->string('email_id_cno')->nullable();
            $table->string('establishment')->nullable();
            $table->string('address')->nullable();
            $table->string('details_of_cno')->nullable();
            $table->string('details_of_no')->nullable();
            $table->string('email_id_no')->nullable();
            $table->string('phone_number_1')->nullable();
            $table->string('phone_number_2')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps();
            $table->softDeletes();

            $table->index(['organisation_name','establishment']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab_details');
    }
}
