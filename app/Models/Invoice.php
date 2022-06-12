<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Invoice
 *
 * @property $id
 * @property $customer_id
 * @property $invoice_date
 * @property $billing_address
 * @property $billing_city
 * @property $billing_state
 * @property $billing_country
 * @property $billing_postal_code
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer $customer
 * @property InvoiceItem[] $invoiceItems
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Invoice extends Model
{

    static $rules = [
		'customer_id' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['customer_id','invoice_date','billing_address','billing_city','billing_state','billing_country','billing_postal_code','total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer()
    {
        return $this->hasOne('App\Models\Customer', 'id', 'customer_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItems()
    {
        return $this->hasMany('App\Models\InvoiceItem', 'invoice_id', 'id');
    }

    use SoftDeletes;

}
