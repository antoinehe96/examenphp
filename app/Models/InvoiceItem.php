<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvoiceItem
 *
 * @property $id
 * @property $invoice_id
 * @property $track_id
 * @property $unit_price
 * @property $quantity
 * @property $created_at
 * @property $updated_at
 *
 * @property Invoice $invoice
 * @property Track $track
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InvoiceItem extends Model
{
    
    static $rules = [
		'invoice_id' => 'required',
		'track_id' => 'required',
		'unit_price' => 'required',
		'quantity' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['invoice_id','track_id','unit_price','quantity'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function invoice()
    {
        return $this->hasOne('App\Models\Invoice', 'id', 'invoice_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function track()
    {
        return $this->hasOne('App\Models\Track', 'id', 'track_id');
    }
    

}
