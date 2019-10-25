<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabTemporariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_temporaries', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id')->comment('central nodal officer user id');
            $table->string('organisation_name')->nullable();
            $table->string('email_id_of_stablishment')->nullable();
            // $table->string('email_id_cno')->unique();
            $table->string('email_id_cno')->nullable()->comment('central nodal officer email id');
            $table->string('email_id_no')->nullable()->comment('nodal officer email id');
            $table->string('establishment')->nullable()->comment('Establishment Having Test Facility');
            $table->string('address')->nullable();
            $table->string('details_of_cno')->nullable()->comment('central Nodal officer address');
            $table->string('details_of_no')->nullable()->comment('Nodal officer address');
            $table->string('phone_number_1')->nullable();
            $table->string('phone_number_2')->nullable();
            $table->string('fax_number')->nullable();
            $table->boolean('status')->default(true)->comment('1 for active and 0 for de-active');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps();
            $table->softDeletes()->comment('deleted_at have timestamps it\'s deleted');

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
        Schema::dropIfExists('lab_temporaries');
    }
}
