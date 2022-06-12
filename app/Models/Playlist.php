<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Playlist
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property PlaylistTrack $playlistTrack
 * @package App
 * @mixin Builder
 */
class Playlist extends Model
{

    static $rules = [
        'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return HasOne
     */
    public function playlistTrack(): HasOne
    {
        return $this->hasOne('App\Models\PlaylistTrack', 'playlist_id', 'id');
    }


}
