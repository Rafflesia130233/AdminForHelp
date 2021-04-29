<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Membernetwork extends Model   {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    
    /**
    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];
    */
    protected $table = 'membernetworks';

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