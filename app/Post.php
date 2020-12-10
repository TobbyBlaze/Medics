<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use Notifiable;
    //Table name
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function posts(){
        return $this->belongsTo('App\User');
    }

}
