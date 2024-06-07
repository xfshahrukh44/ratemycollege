<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;


class Coachchange extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'coachchanges';

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
     
    protected $fillable = ['old_coach', 'old_school', 'old_sports','new_coach', 'new_school', 'new_sports', 'email', 'is_approve','status'];

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
