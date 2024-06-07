<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;


class Rate extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rates';

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
     
    protected $fillable = ['coach_id', 'school_id', 'sports_id','iq', 'ethical', 'communication', 'staff', 'individual_development', 'academics' , 'rate_description', 'other_q_1', 'other_q_2', 'status'];

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
