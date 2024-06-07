<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;


class Order extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'country', 'city', 'state', 'address', 'zipcode', 'phoneno', 'qty', 'total', 'user_id', 'order_email', 'order_status', 'order_notes', 'order_company', 'transaction_id', 'customer_id', 'card_payment', 'token', 'tracking_no', 'invoice_number', 'payment_method', 'status', 'receipt_url'];



    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }



    

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}
