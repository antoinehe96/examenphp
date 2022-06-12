<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('customer_id')->index('ifk_invoicecustomerid');
            $table->dateTime('invoice_date');
            $table->string('billing_address', 70)->nullable();
            $table->string('billing_city', 40)->nullable();
            $table->string('billing_state', 40)->nullable();
            $table->string('billing_country', 40)->nullable();
            $table->string('billing_postal_code', 10)->nullable();
            $table->decimal('total', 10);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
