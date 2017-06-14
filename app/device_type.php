<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class device_type extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'device_types';

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
    protected $fillable = ['device', 'notes'];

    
}
