<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Casestudy extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'casestudies';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}