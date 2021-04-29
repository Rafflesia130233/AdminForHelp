<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vedio extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vedios';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}