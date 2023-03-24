<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVpsServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vps_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->integer('ram');
            $table->string('ram_unit');
            $table->integer('storage');
            $table->string('storage_unit');
            $table->string('storage_type');
            $table->integer('cpu_cores');
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vps_services');
    }
}
