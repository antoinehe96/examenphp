<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tracks', function (Blueprint $table) {
            $table->foreign(['album_id'], 'tracks_ibfk_1')->references(['id'])->on('albums')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['genre_id'], 'tracks_ibfk_2')->references(['id'])->on('genres')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['media_type_id'], 'tracks_ibfk_3')->references(['id'])->on('media_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tracks', function (Blueprint $table) {
            $table->dropForeign('tracks_ibfk_1');
            $table->dropForeign('tracks_ibfk_2');
            $table->dropForeign('tracks_ibfk_3');
        });
    }
}
