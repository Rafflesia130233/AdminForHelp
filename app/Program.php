<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'programs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}