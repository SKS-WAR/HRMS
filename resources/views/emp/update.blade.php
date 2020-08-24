@extends('dashboard')

@section('content')
    <h3>Update Existing Employee</h3>
    <div class="card">
        <div class="card-head bg-danger container text-white">
            <h3 class="m-3">Enter the Employee Details</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['action'=>'EmployeeController@updateEmpPost','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                {{ Form::hidden('id', $emps->id) }}
                <div class="form-group">
                    {{ Form::label('Employee Name') }}
                    <div class = "row">
                        <div class="col-6">
                            {!! Form::text('fname', $emps->fname, ['class'=>'form-control ','placeholder'=>'First Name']) !!}
                            <span>
                                @error('fname')
                                    <h6 class="text-danger">*This Field is required</h6>
                                @enderror
                            </span>
                            
                        </div>
                        
                        <div class="col-6">
                        {{ Form::text('lname', $emps->lname, ['class'=>'form-control','placeholder'=>'Last Name']) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('Father Name') }}
                    {{ Form::text('father_name', $emps->father_name, ['class'=>'form-control','placeholder'=>'Father\'s  Name']) }}
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('padrs', 'Permant Adress') !!}
                    {!! Form::textarea('padrs', $emps->padrs, ['class'=>'form-control','placeholder'=>'Permant Address']) !!}
                    <div class = "row container">
                        {{ Form::text('pcity', $emps->pcity, ['class'=>'form-control col-5 m-3','placeholder'=>'City']) }}
                        {{ Form::text('p_pin', $emps->p_pin, ['class'=>'form-control col-5 m-3','placeholder'=>'PIN']) }}
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('tadrs', 'Temp Adress') !!}
                    {!! Form::textarea('tadrs', $emps->tadrs, ['class'=>'form-control','placeholder'=>'Temporary Address']) !!}
                    <div class = "row container">
                        {{ Form::text('tcity', $emps->tcity, ['class'=>'form-control col-5 m-3','placeholder'=>'City']) }}
                        {{ Form::text('t_pin', $emps->t_pin, ['class'=>'form-control col-5 m-3','placeholder'=>'PIN']) }}
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("Contact Number") !!}
                            {!! Form::text('c_no', $emps->c_no, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label('', "EMAIL") !!}
                            {!! Form::text('email', $emps->email, ['class'=>'form-control','placeholder'=>'Email ID']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label('dob', "DOB") !!}
                            {!! Form::date('dob', $emps->dob, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("Enter your gender") !!}
                            {!! Form::select('gender', array('male' => 'MALE', 'female' => 'FEMALE'), $emps->gender,['class'=>'form-control']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Blood Group") !!}
                            {!! Form::text('blood_group', $emps->blood_group, ['class'=>'form-control','placeholder'=>'Blood Group']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <hr>
                <div class="form-group">
                    <strong class="container">Department & Designation</strong>
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("Department") !!}
                            {!! Form::text('dept', $emps->dept, ['class'=>'form-control','placeholder'=>'Department']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Designation") !!}
                            {!! Form::text('deg', $emps->deg, ['class'=>'form-control','placeholder'=>'Designation']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <strong class="container">Education</strong>
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("Educational Qualifications") !!}
                            {!! Form::text('edu_qua', $emps->edu_qua, ['class'=>'form-control','placeholder'=>'Highest Educational Qualifications']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Upload Modified Certificates") !!}<br>
                            {!! Form::file('cert') !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("Anniversary") !!}
                            {!! Form::date('ani', $emps->ani, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Religion") !!}
                            {!! Form::text('religion', $emps->religion, ['class'=>'form-control','placeholder'=>'Enter Your Religion']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <strong class="container">Necessary Details</strong>
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("ADHAAR") !!}
                            {!! Form::text('adhaar', $emps->adhaar, ['class'=>'form-control','placeholder'=>'ADHAAR Card Number']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Voter ID") !!}
                            {!! Form::text('voter_id', $emps->voter_id, ['class'=>'form-control','placeholder'=>'Voter ID']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Driving Licence") !!}
                            {!! Form::text('driving_linc', $emps->driving_linc, ['class'=>'form-control','placeholder'=>'Driving Licence']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Matarial Status") !!}
                            {!! Form::text('matrial_status', $emps->matrial_status, ['class'=>'form-control','placeholder'=>'Current Matrital Status']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <strong class="container">Account Details</strong>
                    <div class="row container">
                        <div class="col-6 mt-2">
                            {!! Form::label("Payment Mode") !!}
                            {!! Form::text('paymode', $emps->paymode, ['class'=>'form-control','placeholder'=>'Payment Mode']) !!}
                        </div>
                        <div class="col-6 mt-2">
                            {!! Form::label("Account Number") !!}
                            {!! Form::text('acc_no', $emps->acc_no, ['class'=>'form-control','placeholder'=>'Account Number']) !!}
                        </div>
                        <div class="col-6 mt-2">
                            {!! Form::label("PF Number") !!}
                            {!! Form::text('PF_no', $emps->PF_no, ['class'=>'form-control','placeholder'=>'PF Number']) !!}
                        </div>
                        <div class="col-6 mt-2">
                            {!! Form::label("PAN") !!}
                            {!! Form::text('PAN', $emps->PAN, ['class'=>'form-control','placeholder'=>'PAN']) !!}
                        </div>
                        <div class="col-6 mt-2">
                            {!! Form::label("UAN Number") !!}
                            {!! Form::text('UAN_no', $emps->UAN_no, ['class'=>'form-control','placeholder'=>'UAN Number']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <strong class="container">Documents</strong>
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("Upload Modified Passport Sized Photo") !!}<br>
                            {!! Form::file('photo') !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Upload Modified Resume") !!}<br>
                            {!! Form::file('resume') !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label( 'Date of Joining') !!}
                    {!! Form::date('doj', $emps->doj, ['class'=>'form-control']) !!}
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::submit('Update Employee',['class'=>'form-control btn btn-danger']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection