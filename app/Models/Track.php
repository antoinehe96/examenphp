<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Track
 *
 * @property $id
 * @property $name
 * @property $album_id
 * @property $media_type_id
 * @property $genre_id
 * @property $composer
 * @property $milliseconds
 * @property $bytes
 * @property $unit_price
 * @property $created_at
 * @property $updated_at
 *
 * @property Album $album
 * @property Genre $genre
 * @property InvoiceItem[] $invoiceItems
 * @property MediaType $mediaType
 * @property PlaylistTrack[] $playlistTracks
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Track extends Model
{

    static $rules = [
		'name' => 'required',
		'media_type_id' => 'required',
		'milliseconds' => 'required',
		'unit_price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','album_id','media_type_id','genre_id','composer','milliseconds','bytes','unit_price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function album()
    {
        return $this->hasOne('App\Models\Album', 'id', 'album_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genre()
    {
        return $this->hasOne('App\Models\Genre', 'id', 'genre_id');
    }

    /**
     * @return HasMany
     */
    public function invoiceItems()
    {
        return $this->hasMany('App\Models\InvoiceItem', 'track_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mediaType()
    {
        return $this->hasOne('App\Models\MediaType', 'id', 'media_type_id');
    }

    /**
     * @return HasMany
     */
    public function playlistTracks()
    {
        return $this->hasMany('App\Models\PlaylistTrack', 'track_id', 'id');
    }

    use SoftDeletes;

}
