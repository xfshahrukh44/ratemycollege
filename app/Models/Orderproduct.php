<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;


class Orderproduct extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orderproducts';

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
    protected $fillable = ['order_id', 'order_product_id', 'order_product_name', 'order_product_price', 'order_product_qty', 'order_product_subtotal', 'order_user_id', 'variation_price', 'variants', 'image' , 'status' , 'order_shipped_or_pending'];



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
