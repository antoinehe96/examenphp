<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MediaType
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
class MediaType extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

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
        return $this->hasMany('App\Models\Track', 'media_type_id', 'id');
    }
    

}
