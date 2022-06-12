<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('artists', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('albums', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('tracks', function (Blueprint $table){
            $table->SoftDeletes();
        });
        Schema::table('genres', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('customers', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('employees', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('invoices', function (Blueprint $table){
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
        Schema::table('artists', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
        Schema::table('albums', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
        Schema::table('tracks', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
        Schema::table('genres', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
        Schema::table('customers', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
        Schema::table('employees', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
        Schema::table('invoices', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
    }
};
