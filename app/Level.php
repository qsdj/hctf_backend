<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $primaryKey = "level_id";
    protected $casts = [
      'rules' => 'array'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}