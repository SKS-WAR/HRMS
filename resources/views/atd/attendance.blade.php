@extends('dashboard')

@section('content')
    <h3>Attendance for {{ $emps->fname." ".$emps->lname }}</h3>
    <div class="card">
        <div class="card-head bg-danger container text-white">
            <h3 class="m-3">Update the attendance</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['action'=>'AttendanceController@updateAtdPost','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <h4>Employee Name :{{ $emps->fname." ".$emps->lname }}</h4>
            <h4>Employee ID :{{ $emps->id }}</h4>
                {{ Form::hidden('id', $emps->id) }}
                {{ Form::hidden('atds_id', $atds->id) }}
                <hr>
                <div class="form-group">
                    <h5>Date and Details</h5>
                    <div class = "row">
                        <div class="col-6">
                            {!! Form::label('Date') !!}
                            {!! Form::date('date', $atds->date, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label('Type of day') !!}
                            {!! Form::select('date_type',array('w' => 'Working Day', 'a' => 'Absent','l'=>'Leave','wo'=>'Weekly Off','ph'=>'Public Holiday'), $atds->date_type, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <h5>Daily In Out Time</h5>
                    <div class = "row">
                        <div class="col-6">
                            {!! Form::label('IN Time') !!}
                            {!! Form::time('in', $atds->in, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label('OUT Time') !!}
                            {!! Form::time('out',$atds->out, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <h5>Lunch In Out Time</h5>
                    <div class = "row">
                        <div class="col-6">
                            {!! Form::label('OUT Time') !!}
                            {!! Form::time('lunch_out',$atds->lunch_out, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label('IN Time') !!}
                            {!! Form::time('lunch_in',$atds->lunch_in, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <h5>Tea In Out Time</h5>
                    <div class = "row">
                        <div class="col-6">
                            {!! Form::label('IN Time') !!}
                            {!! Form::time('time', $atds->tea_out, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label('OUT Time') !!}
                            {!! Form::time('time', $atds->tea_in, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
                
                <hr>
                <div class="form-group">
                    {!! Form::submit('Update Attendance',['class'=>'form-control btn btn-danger']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection