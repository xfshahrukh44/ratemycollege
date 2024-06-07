<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;


class Wp_coach extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'wp_coaches';

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
     
    protected $fillable = ['name', 'school_id' ,'gender_id' ,'sports_id' , 'status'];

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
