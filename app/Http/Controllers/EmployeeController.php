<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Storage;
class EmployeeController extends Controller
{
    //

    public function createEmpGet(){
        return view('emp.create');
    }
    public function createEmpPost(Request $request){
        $this->validate($request,[
            'fname'=>'required',
            'lname'=>' required',
            'father_name'=>'required',
            'padrs'=>'required',
            'pcity'=>'required',
            'p_pin'=>'required',
            'tadrs'=>'nullable',
            'tcity'=>'nullable',
            't_pin'=>'nullable',
            'dob'=>'required',
            'c_no'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'dept'=>'required',
            'deg'=>'required',
            'blood_group'=>'required',
            'edu_qua'=>'required',
            'cert'=>'required|max:1999',
            'paymode'=>'required',
            'acc_no'=>'required',
            'PF_no'=>'required',
            'PAN'=>'required',
            'UAN_no'=>'required'
            
        ]);

        $emp = new Employee;
        $emp->fname = $request->input('fname');
        $emp->lname = $request->input('lname');
        $emp->father_name = $request->input('father_name');
        
        $emp->padrs = $request->input('padrs');
        $emp->pcity = $request->input('pcity');
        $emp->p_pin = $request->input('p_pin');

        $emp->tadrs = $request->input('tadrs');
        $emp->tcity = $request->input('tcity');
        $emp->t_pin = $request->input('t_pin');
        
        $emp->dob = $request->input('dob');
        $emp->c_no = $request->input('c_no');
        $emp->email = $request->input('email');

        $emp->gender = $request->input('gender');
        $emp->dept = $request->input('dept');
        $emp->deg = $request->input('deg');
        $emp->blood_group = $request->input('blood_group');
        $emp->edu_qua = $request->input('edu_qua');

        $emp->cert = 'cert.'.($request->file('cert')->getClientOriginalExtension());
        
        $emp->ani = $request->input('ani');
        $emp->religion = $request->input('religion');
        $emp->driving_linc = $request->input('driving_linc');
        $emp->voter_id = $request->input('voter_id');
        
        $emp->adhaar = $request->input('adhaar');
        $emp->matrial_status = $request->input('matrial_status');

        $emp->paymode = $request->input('paymode');
        $emp->acc_no = $request->input('acc_no');
        $emp->PF_no = $request->input('PF_no');
        $emp->PAN = $request->input('PAN');
        $emp->UAN_no = $request->input('UAN_no');
                
        $emp->photo = 'photo.'.($request->file('photo')->getClientOriginalExtension());
        $emp->resume = 'resume.'.($request->file('resume')->getClientOriginalExtension());
        
        $emp->doj = $request->input('doj');
        $emp->save();

        Storage::putFileAs('public/emp/'.$emp->id.'/', $request->file('cert'),('cert.'.($request->file('cert')->getClientOriginalExtension())));
        Storage::putFileAs('public/emp/'.$emp->id.'/', $request->file('photo'),('photo.'.($request->file('photo')->getClientOriginalExtension())));
        Storage::putFileAs('public/emp/'.$emp->id.'/', $request->file('resume'),('resume.'.($request->file('resume')->getClientOriginalExtension())));

        return view('emp.create');
    }

    public function updateEmpGet(Request $request){    
        $emps = Employee::where('id',$request->id)->first();
        return view('emp.update',['emps'=>$emps]);
    }

    public function updateEmpPost(Request $request){
        $emps = Employee::where('id',$request->input('id'))->first();

        $this->validate($request,[
            'fname'=>'required',
            'lname'=>' required',
            'father_name'=>'required',
            'padrs'=>'required',
            'pcity'=>'required',
            'p_pin'=>'required',
            'tadrs'=>'nullable',
            'tcity'=>'nullable',
            't_pin'=>'nullable',
            'dob'=>'required',
            'c_no'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'dept'=>'required',
            'deg'=>'required',
            'blood_group'=>'required',
            'edu_qua'=>'required',
            'paymode'=>'required',
            'acc_no'=>'required',
            'PF_no'=>'required',
            'PAN'=>'required',
            'UAN_no'=>'required'

            
        ]);

        $emp = Employee::find($request->input('id'));
        $emp->fname = $request->input('fname');
        $emp->lname = $request->input('lname');
        $emp->father_name = $request->input('father_name');
        
        $emp->padrs = $request->input('padrs');
        $emp->pcity = $request->input('pcity');
        $emp->p_pin = $request->input('p_pin');

        $emp->tadrs = $request->input('tadrs');
        $emp->tcity = $request->input('tcity');
        $emp->t_pin = $request->input('t_pin');
        
        $emp->dob = $request->input('dob');
        $emp->c_no = $request->input('c_no');
        $emp->email = $request->input('email');

        $emp->gender = $request->input('gender');
        $emp->dept = $request->input('dept');
        $emp->deg = $request->input('deg');
        $emp->blood_group = $request->input('blood_group');
        $emp->edu_qua = $request->input('edu_qua');

        if($request->hasFile('cert')){
            $emp->cert = 'cert.'.($request->file('cert')->getClientOriginalExtension());
            Storage::putFileAs('public/emp/'.$emp->id.'/', $request->file('cert'),('cert.'.($request->file('cert')->getClientOriginalExtension())));
        
        }
        
        $emp->ani = $request->input('ani');
        $emp->religion = $request->input('religion');
        $emp->driving_linc = $request->input('driving_linc');
        $emp->voter_id = $request->input('voter_id');
        
        $emp->paymode = $request->input('paymode');
        $emp->acc_no = $request->input('acc_no');
        $emp->PF_no = $request->input('PF_no');
        $emp->PAN = $request->input('PAN');
        $emp->UAN_no = $request->input('UAN_no');

        $emp->adhaar = $request->input('adhaar');
        $emp->matrial_status = $request->input('matrial_status');
        
        if($request->hasFile('photo')){
            $emp->photo = 'photo.'.($request->file('photo')->getClientOriginalExtension());
            Storage::putFileAs('public/emp/'.$emp->id.'/', $request->file('photo'),('photo.'.($request->file('photo')->getClientOriginalExtension())));
        }
        
        if($request->hasFile('resume')){
            $emp->resume = 'resume.'.($request->file('resume')->getClientOriginalExtension());
            Storage::putFileAs('public/emp/'.$emp->id.'/', $request->file('resume'),('resume.'.($request->file('resume')->getClientOriginalExtension())));    
        }
        
        
        
        $emp->doj = $request->input('doj');
        $emp->save();

        return redirect('view');
    }

    public function view(){

        $emps = Employee::all();
        return view('emp.view',['emps'=>$emps]);
    }

    public function dashboard(){
        return view('dashboard');
    }
}
