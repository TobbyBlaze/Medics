<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    use Notifiable;
    //Table name
    protected $table = 'medicals';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function medicals(){
        return $this->belongsTo('App\User');
    }

}
