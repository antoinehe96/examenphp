<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Artist
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Album[] $albums
 * @package App
 * @mixin Builder
 */
class Artist extends Model
{

    static $rules = [
        'name' => 'required'

    ];

    protected $perPage = 25;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return HasMany
     */
    public function albums()
    {
        return $this->hasMany('App\Models\Album', 'artist_id', 'id');
    }

    use SoftDeletes;
}
