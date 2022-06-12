<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('lastname', 20);
            $table->string('firstname', 20);
            $table->string('title', 30)->nullable();
            $table->integer('reportsto')->nullable()->index('ifk_employeereportsto');
            $table->dateTime('birthdate')->nullable();
            $table->dateTime('hiredate')->nullable();
            $table->string('address', 70)->nullable();
            $table->string('city', 40)->nullable();
            $table->string('state', 40)->nullable();
            $table->string('country', 40)->nullable();
            $table->string('postalcode', 10)->nullable();
            $table->string('phone', 24)->nullable();
            $table->string('fax', 24)->nullable();
            $table->string('email', 60)->nullable();
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
        Schema::dropIfExists('employees');
    }
}
