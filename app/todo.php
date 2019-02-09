<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    // Table Name
    protected $table = 'todos';
    // Primary key
    public $primaryKey = 'id';
    // time stamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}