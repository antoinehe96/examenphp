<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Genre
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Track[] $tracks
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Genre extends Model
{

    static $rules = [
        'name' => 'required',
    ];

    protected $perPage = 50;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tracks()
    {
        return $this->hasMany('App\Models\Track', 'genre_id', 'id');
    }

    use SoftDeletes;

}
