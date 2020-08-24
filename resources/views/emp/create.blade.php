@extends('dashboard')

@section('content')
    <h3>Create New Employee</h3>
    <div class="card">
        <div class="card-head bg-success container text-white">
            <h3 class="m-3">Enter the Employee Details</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['action'=>'EmployeeController@createEmpPost','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {{ Form::label('Employee Name') }}
                    <div class = "row">
                        <div class="col-6">
                            {!! Form::text('fname', '', ['class'=>'form-control ','placeholder'=>'First Name']) !!}
                            <span>
                                @error('fname')
                                    <h6 class="text-danger">*This Field is required</h6>
                                @enderror
                            </span>
                            
                        </div>
                        
                        <div class="col-6">
                        {{ Form::text('lname', '', ['class'=>'form-control','placeholder'=>'Last Name']) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('Father Name') }}
                    {{ Form::text('father_name', '', ['class'=>'form-control','placeholder'=>'Father\'s  Name']) }}
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('padrs', 'Permant Adress') !!}
                    {!! Form::textarea('padrs', '', ['class'=>'form-control','placeholder'=>'Permant Address']) !!}
                    <div class = "row container">
                        {{ Form::text('pcity', '', ['class'=>'form-control col-5 m-3','placeholder'=>'City']) }}
                        {{ Form::text('p_pin', '', ['class'=>'form-control col-5 m-3','placeholder'=>'PIN']) }}
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('tadrs', 'Temp Adress') !!}
                    {!! Form::textarea('tadrs', '', ['class'=>'form-control','placeholder'=>'Temporary Address']) !!}
                    <div class = "row container">
                        {{ Form::text('tcity', '', ['class'=>'form-control col-5 m-3','placeholder'=>'City']) }}
                        {{ Form::text('t_pin', '', ['class'=>'form-control col-5 m-3','placeholder'=>'PIN']) }}
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("Contact Number") !!}
                            {!! Form::text('c_no', '', ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label('', "EMAIL") !!}
                            {!! Form::text('email', '', ['class'=>'form-control','placeholder'=>'Email ID']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label('dob', "DOB") !!}
                            {!! Form::date('dob', '', ['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("Enter your gender") !!}
                            {!! Form::select('gender', array('male' => 'MALE', 'female' => 'FEMALE'), 'female',['class'=>'form-control']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Blood Group") !!}
                            {!! Form::text('blood_group', '', ['class'=>'form-control','placeholder'=>'Blood Group']) !!}
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
                            {!! Form::text('dept', '', ['class'=>'form-control','placeholder'=>'Department']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Designation") !!}
                            {!! Form::text('deg', '', ['class'=>'form-control','placeholder'=>'Designation']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <strong class="container">Education</strong>
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("Educational Qualifications") !!}
                            {!! Form::text('edu_qua', '', ['class'=>'form-control','placeholder'=>'Highest Educational Qualifications']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Upload Certificates") !!}<br>
                            {!! Form::file('cert') !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("Anniversary") !!}
                            {!! Form::date('ani', '', ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Religion") !!}
                            {!! Form::text('religion', '', ['class'=>'form-control','placeholder'=>'Enter Your Religion']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <strong class="container">Necessary Details</strong>
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("ADHAAR") !!}
                            {!! Form::text('adhaar', '', ['class'=>'form-control','placeholder'=>'ADHAAR Card Number']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Voter ID") !!}
                            {!! Form::text('voter_id', '', ['class'=>'form-control','placeholder'=>'Voter ID']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Driving Licence") !!}
                            {!! Form::text('driving_linc', '', ['class'=>'form-control','placeholder'=>'Driving Licence']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Matarial Status") !!}
                            {!! Form::text('matrial_status', '', ['class'=>'form-control','placeholder'=>'Current Matrital Status']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <strong class="container">Account Details</strong>
                    <div class="row container">
                        <div class="col-6 mt-2">
                            {!! Form::label("Payment Mode") !!}
                            {!! Form::text('paymode', '', ['class'=>'form-control','placeholder'=>'Payment Mode']) !!}
                        </div>
                        <div class="col-6 mt-2">
                            {!! Form::label("Account Number") !!}
                            {!! Form::text('acc_no', '', ['class'=>'form-control','placeholder'=>'Account Number']) !!}
                        </div>
                        <div class="col-6 mt-2">
                            {!! Form::label("PF Number") !!}
                            {!! Form::text('PF_no', '', ['class'=>'form-control','placeholder'=>'PF Number']) !!}
                        </div>
                        <div class="col-6 mt-2">
                            {!! Form::label("PAN") !!}
                            {!! Form::text('PAN', '', ['class'=>'form-control','placeholder'=>'PAN']) !!}
                        </div>
                        <div class="col-6 mt-2">
                            {!! Form::label("UAN Number") !!}
                            {!! Form::text('UAN_no', '', ['class'=>'form-control','placeholder'=>'UAN Number']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <strong class="container">Documents</strong>
                    <div class="row container">
                        <div class="col-6">
                            {!! Form::label("Passport Sized Photo") !!}<br>
                            {!! Form::file('photo') !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label("Upload Resume") !!}<br>
                            {!! Form::file('resume') !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label( 'Date of Joining') !!}
                    {!! Form::date('doj', '', ['class'=>'form-control']) !!}
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::submit('Register Employee',['class'=>'form-control btn btn-success']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection