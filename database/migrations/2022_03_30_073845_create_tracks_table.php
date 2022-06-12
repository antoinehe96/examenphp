<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 200);
            $table->integer('album_id')->nullable()->index('ifk_trackalbumid');
            $table->integer('media_type_id')->index('ifk_trackmediatypeid');
            $table->integer('genre_id')->nullable()->index('ifk_trackgenreid');
            $table->string('composer', 220)->nullable();
            $table->integer('milliseconds');
            $table->integer('bytes')->nullable();
            $table->decimal('unit_price', 10);
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
        Schema::dropIfExists('tracks');
    }
}
