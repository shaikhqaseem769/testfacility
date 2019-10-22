<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('organisation_name')->nullable()->comment('organisation name');
            $table->string('establishment_email_id')->nullable()->comment('email id of organisation');
            $table->string('cno_email_id')->nullable()->comment('Central Nodal Officer email id');
            $table->boolean('status')->default(true)->comment('1 for active and 0 for de-active');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['organisation_name', 'status', 'cno_email_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisations');
    }
}
