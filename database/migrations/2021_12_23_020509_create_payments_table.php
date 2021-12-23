<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('transaction_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade')->onUpdate('cascade');
            $table->string('transaction_method');
            $table->decimal('payment_account', 8, 2);
            $table->decimal('tax_percent', 8, 2);
            $table->decimal('tax_account', 8, 2);
            $table->decimal('total_account', 8, 2);
            $table->string('transaction_currency');
            $table->timestamp('transaction_date');
            $table->string('remarks');
            $table->string('transaction_reference');
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
        Schema::dropIfExists('payments');
    }
}
