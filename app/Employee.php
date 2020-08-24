<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [ 'fname' , 'lname' ,'father_name','padrs','pcity','p_pin','tadrs','tcity',
    't_pin','dob','c_no','email','gender','dept','deg','blood_group','edu_qua','cert','ani','religion',
    'driving_linc','voter_id','adhaar','material_status','photo','resume','doj'];

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
}
