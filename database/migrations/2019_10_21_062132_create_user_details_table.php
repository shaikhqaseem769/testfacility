<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('user_id', 100)->comment('User Id of Organisation');
            $table->string('organisation_name')->nullable();
            $table->string('organisation_email_id')->nullable();
            $table->string('organisation_phone_number')->nullable();
            $table->string('organisation_tin_number')->nullable();
            $table->string('organisation_gst_number')->nullable();
            
            $table->timestamps();
            $table->softDeletes();

            $table->index(['organisation_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
