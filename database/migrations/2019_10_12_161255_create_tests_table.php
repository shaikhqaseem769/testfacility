<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('id')->primary();
            $table->string('user_id_cno')->nullable()->comment('Central Nodal Officer user id');
            $table->string('user_id_no')->nullable()->comment('Nodal Officer user id');
            $table->string('organisation_id')->nullable();
            $table->string('establishment')->nullable()->comment('Establishment Having Test Facility');
            $table->string('lab')->nullable();
            $table->string('location')->nullable();
            $table->string('discipline')->nullable();
            $table->string('calibration_facility')->nullable();
            $table->string('test_eqpt_manufacturer')->nullable();
            $table->year('manufacturing_year_of_eqpt')->nullable();
            $table->string('chamber_size')->nullable();
            $table->string('range_of_test_eqpt')->nullable();
            $table->string('product_material')->nullable();
            $table->string('test_name')->nullable();
            $table->string('specifications')->nullable();
            $table->string('max_dimension')->nullable();
            $table->string('max_weight')->nullable();
            $table->string('duration')->nullable();
            $table->double('test_charge', 8, 2)->default(0);
            $table->string('charge_on')->nullable();
            $table->string('nabl_status')->nullable();
            $table->string('advance_notice')->nullable();
            $table->string('constraints')->nullable();
            $table->string('remarks')->nullable();
            $table->boolean('status')->default(true)->comment('1 for active, 0 for de-active');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            
            $table->timestamps();
            $table->softDeletes();

            $table->index(['organisation_id', 'establishment', 'lab']);
            $table->index(['location', 'discipline', 'product_material']);
            $table->index(['test_name', 'test_eqpt_manufacturer']);
            $table->index([ 'chamber_size', 'range_of_test_eqpt']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
