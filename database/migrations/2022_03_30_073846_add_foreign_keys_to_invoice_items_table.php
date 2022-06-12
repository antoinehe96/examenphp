<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_items', function (Blueprint $table) {
            $table->foreign(['invoice_id'], 'invoice_items_ibfk_1')->references(['id'])->on('invoices')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['track_id'], 'invoice_items_ibfk_2')->references(['id'])->on('tracks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoice_items', function (Blueprint $table) {
            $table->dropForeign('invoice_items_ibfk_1');
            $table->dropForeign('invoice_items_ibfk_2');
        });
    }
}
