<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPlaylistTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('playlist_track', function (Blueprint $table) {
            $table->foreign(['playlist_id'], 'playlist_track_ibfk_1')->references(['id'])->on('playlists')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['track_id'], 'playlist_track_ibfk_2')->references(['id'])->on('tracks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('playlist_track', function (Blueprint $table) {
            $table->dropForeign('playlist_track_ibfk_1');
            $table->dropForeign('playlist_track_ibfk_2');
        });
    }
}
