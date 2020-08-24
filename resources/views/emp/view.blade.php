@extends('dashboard')

@section('content')
    @foreach ($emps as $emp)

        <div class="card">
            <div class="card-head container row m-3 p-0">
                <img src="/storage/emp/{{$emp->id}}/{{$emp->photo}}" class="w-25 col-4">
                <div class="col-8">
                    <h4>{{ $emp->fname }} {{ $emp->lname }}</h4>
                    <h6>Email : {{ $emp->email }}</h6>
                    <h6>phone : {{ $emp->c_no }}   </h6>
                    <h6>Department: {{ $emp->dept }} &nbsp;&nbsp;&nbsp;&nbsp;Designation: {{ $emp->deg }}</h6>
                    <div><a href="{{ Route('update')."?id=".$emp->id }}">EDIT</a></div>
                    <div><a href="{{ Route('calender',['id'=>$emp->id]) }}">Attendance</a></div>
                </div> 
            </div>
        </div>
    @endforeach

@endsection