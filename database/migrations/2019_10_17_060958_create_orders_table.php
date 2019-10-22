<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id')->nullable()->comment('User id who is booking test');
            $table->string('test_id')->nullable();
            $table->string('organisation_id')->nullable();
            $table->double('price', 8, 2)->default(0)->comment('actual price of test');
            $table->double('total_price', 8, 2)->default(0)->comment('including gst price of test');
            $table->text('description')->nullable();
            $table->date('test_date')->nullable();
            $table->time('test_time')->nullable();
            $table->tinyInteger('status')->default(0)->comment('1 for accepted, 0 for rejected');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['test_id', 'organisation_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
