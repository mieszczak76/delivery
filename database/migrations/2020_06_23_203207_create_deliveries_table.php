<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('worker_id');
            $table->unsignedBigInteger('supplier_company_id');
            $table->string('documents');
            $table->string('delivery_calculated');
            $table->unsignedBigInteger('counting_person_id');
            $table->timestamps();
            $table->foreign('worker_id')
                ->references('id')
                ->on('workers')
                ->onDelete('cascade');
            $table->foreign('counting_person_id')
                ->references('id')
                ->on('workers')
                ->onDelete('cascade');
            $table->foreign('supplier_company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
