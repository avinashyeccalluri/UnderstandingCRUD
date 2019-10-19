<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentdatabase extends Model
{
    protected $fillable=[
        'firstname','lastname','mobilenumber'
    ];
    // protected $guarded=[];

    public function tasks(){
        return $this->hasMany(task::class);
    }



}
