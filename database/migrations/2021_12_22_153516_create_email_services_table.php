<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->integer('storage');
            $table->string('storage_unit');
            $table->tinyInteger('anti_spam')->default(0);
            $table->tinyInteger('blacklist_email')->default(0);
            $table->tinyInteger('rate_limit')->default(0);
            $table->text('feature');
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
        Schema::dropIfExists('email_services');
    }
}
