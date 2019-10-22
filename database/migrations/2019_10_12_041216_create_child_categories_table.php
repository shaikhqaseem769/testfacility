<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_categories', function (Blueprint $table) {
            
            $table->string('id', 100)->primary();
            $table->string('category_id')->nullable();
            $table->string('child_category_name')->nullable();
            $table->string('description')->nullable();
            $table->integer('position')->default(0);
            $table->boolean('status')->default(true)->comment('1 for active, 0 for de-active');
            $table->string('created_by', 100)->nullable();
            $table->string('updated_by', 100)->nullable();
            $table->timestamps();

            $table->softDeletes();

            $table->index(['child_category_name']);
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
        Schema::dropIfExists('child_categories');
    }
}
