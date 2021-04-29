<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'members';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}