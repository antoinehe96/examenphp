<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Album
 *
 * @property $id
 * @property $title
 * @property $artist_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Artist $artist
 * @property Track[] $tracks
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Album extends Model
{

    static $rules = [
		'title' => 'required',
		'artist_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','artist_id'];


    /**
     * @return HasOne
     */
    public function artist()
    {
        return $this->hasOne('App\Models\Artist', 'id', 'artist_id');
    }

    /**
     * @return HasMany
     */
    public function tracks()
    {
        return $this->hasMany('App\Models\Track', 'album_id', 'id');
    }

    use SoftDeletes;
}
