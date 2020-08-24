<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['date','date_type','in','out','lunch_out','lunch_in','tea_out','tea_in'];

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
}
