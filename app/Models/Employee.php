<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 *
 * @property $id
 * @property $lastname
 * @property $firstname
 * @property $title
 * @property $reportsto
 * @property $birthdate
 * @property $hiredate
 * @property $address
 * @property $city
 * @property $state
 * @property $country
 * @property $postalcode
 * @property $phone
 * @property $fax
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer[] $customers
 * @property Employee[] $employees
 * @property Employee $employee
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{

    static $rules = [
		'lastname' => 'required',
		'firstname' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lastname','firstname','title','reportsto','birthdate','hiredate','address','city','state','country','postalcode','phone','fax','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers()
    {
        return $this->hasMany('App\Models\Customer', 'employee_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees()
    {
        return $this->hasMany('App\Models\Employee', 'reportsto', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne('App\Models\Employee', 'id', 'reportsto');
    }

    use SoftDeletes;

}
