<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('id', 100)->primary();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('name')->nullable()->comment('User Full Name');
            $table->string('email')->nullable();
            $table->string('mobile',20)->nullable();
            $table->string('gender',10)->nullable();
            $table->string('password')->nullable();
            $table->string('user_type',20)->nullable();
            $table->boolean('email_verified')->default(false);
            $table->boolean('mobile_verified')->default(false);
            $table->boolean('status')->default(true)->comment('1 for active, 0 for de-active');
            $table->string('google_id',50)->nullable();
            $table->string('facebook_id',50)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes()->comment('deleted_at have timestamps it\'s deleted');;

            $table->index(['email','mobile','email_verified','mobile_verified']);
            $table->index(['user_type','status','gender']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
