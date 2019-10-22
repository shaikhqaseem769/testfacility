<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            
            $table->string('id', 100)->primary();
            $table->string('category_name')->nullable();
            $table->string('description')->nullable();
            $table->integer('position')->default(0);
            $table->boolean('status')->default(true)->comment('1 for active, 0 for de-active');  
            $table->string('created_by', 100)->nullable();
            $table->string('updated_by', 100)->nullable();
            $table->timestamps();

            $table->softDeletes();

            $table->index(['category_name']);
            $table->index(['position', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
