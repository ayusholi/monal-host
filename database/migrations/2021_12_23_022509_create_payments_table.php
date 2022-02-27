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
            $table->string('transaction_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_service_id')->constrained('user_services')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('admin_id')->nullable()->constrained('admins')->onDelete('set null')->onUpdate('cascade');
            $table->string('transaction_method');
            $table->decimal('payment_amount', 8, 2);
            $table->decimal('tax_percent', 8, 2);
            $table->decimal('tax_amount', 8, 2);
            $table->decimal('total_amount', 8, 2);
            $table->string('transaction_currency');
            $table->string('remarks')->nullable();
            $table->string('transaction_reference')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('transaction_date');
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
