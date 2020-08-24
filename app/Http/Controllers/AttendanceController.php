<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Attendance;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    //
    public function updateAtdGet(Request $request){
        
        $emps = Employee::where('id',$request->id)->first();
        $atds = Attendance::where('user_id',$request->id)
                                ->where('date',$request->date)
                                ->first();
        if($atds){
            return view('atd.attendance',['emps'=>$emps,'atds'=>$atds]);
        }else {
            $atds = new Attendance;
            $atds->user_id = $request->id;
            $atds->date = $request->date;
            $atds->date_type = 'w';
            $atds->save();
        }
        return view('atd.attendance',['emps'=>$emps,'atds'=>$atds]);
    }
    public function updateAtdPost(Request $request){
        $atds = Attendance::where('id',$request->atds_id)->first();
        $atds->date_type = $request->date_type;
        $atds->in = $request->in;
        $atds->out = $request->out;
        $atds->lunch_in = $request->lunch_in;
        $atds->lunch_out = $request->lunch_out;
        $atds->tea_in = $request->tea_in;
        $atds->tea_out = $request->tea_out;
        $atds->save();
        return redirect('view');
    }
    public function caldenderGet(Request $request){

        $atds = DB::table('attendances')
                    ->where('user_id',$request->id)
                    ->get();
        $arr = json_decode($atds, true);
        $w_days_arr = array();
        $a_days_arr = array();
        $l_days_arr = array();
        $wo_days_arr = array();
        $ph_days_arr = array();
        foreach ($arr as $key => $value) {
            //echo json_decode();
            # code...
            foreach ($value as $k => $v) {
                # code...
                if ($k == 'date_type') {
                    # code...
                    if ($v == 'w') {
                        # code...
                        array_push($w_days_arr,$value);
                    }
                    if ($v == 'a') {
                        # code...
                        array_push($a_days_arr,$value);
                    }
                    if ($v == 'l') {
                        # code...
                        array_push($l_days_arr,$value);
                    }
                    if ($v == 'ph') {
                        # code...
                        array_push($ph_days_arr,$value);
                    }
                    if ($v == 'wo') {
                        # code...
                        array_push($wo_days_arr,$value);
                    }
                    
            }
            }
        }
        //return $w_days_arr;
        $d=cal_days_in_month(CAL_GREGORIAN,8,2020);

        $emp = Employee::find($request->id);

        return view('atd.calender',["emp"=>$emp,"days"=>$d,'w_days'=>$w_days_arr,'a_days'=>$a_days_arr,
                                    'l_days'=>$l_days_arr,'ph_days'=>$ph_days_arr,'wo_days'=>$wo_days_arr]);

    }
    public function caldenderPost(Request $request){

        return view('atd.calender');

    }
}
