<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('region_id')->constrained('regions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('storage_id')->nullable()->constrained('storages')->onDelete('set null')->onUpdate('cascade');
            $table->foreignId('operating_system_id')->constrained('operating_systems')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('start_from')->nullable();
            $table->dateTime('expires_at')->nullable();
            $table->longText('credentials')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_services');
    }
}
