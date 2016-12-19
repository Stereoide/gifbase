<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gif extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'filename', 'extension',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
