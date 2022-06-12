<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 *
 * @property $id
 * @property $firstname
 * @property $lastname
 * @property $company
 * @property $address
 * @property $city
 * @property $state
 * @property $country
 * @property $postalcode
 * @property $phone
 * @property $fax
 * @property $email
 * @property $employee_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Employee $employee
 * @property Invoice[] $invoices
 * @package App
 * @mixin Builder
 */
class Customer extends Model
{

    static $rules = [
		'firstname' => 'required',
		'lastname' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname','lastname','company','address','city','state','country','postalcode','phone','fax','email','employee_id'];


    /**
     * @return HasOne
     */
    public function employee()
    {
        return $this->hasOne('App\Models\Employee', 'id', 'employee_id');
    }

    /**
     * @return HasMany
     */
    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice', 'customer_id', 'id');
    }

    use SoftDeletes;

}
