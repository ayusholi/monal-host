<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserServiceAdminMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_service_admin_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_service_id')->constrained('user_services')->onDelete('cascade')->onUpdate('cascade');
            $table->foreginId('admin_id')->constrained('admins')->onDelete('cascade')->onUpdate('cascade');
            $table->text('admin_message');
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
        Schema::dropIfExists('user_service_admin_messages');
    }
}
