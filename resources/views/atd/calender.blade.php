@extends('dashboard')

@section('content')
<div class="card">
    <div class="card-head container">
        <br>
        <h3>{{ $emp->fname }} {{ $emp->lname }}</h3>
        <h3>For <strong>AUGUST</strong> month</h3>
        <hr>
        <h4>Total Number of days : {{ $days }}</h4>
        <h4>Total Number of working days : {{ count($w_days) }}</h4>
        <h4>Total Number of absent days : {{ count($a_days) }}</h4>
        <h4>Total Number of leave days : {{ count($l_days) }}</h4>
        <h4>Total Number of public holidays : {{ count($ph_days) }}</h4>
        <h4>Total Number of weekly off : {{ count($wo_days) }}</h4>
        <h4>Total Number of days without attendance : {{ $days-count($w_days)-count($a_days)
                                        -count($l_days)-count($ph_days)-count($wo_days) }}</h4>
    </div>
    <div class="card-body row">
        @for ($i = 1; $i <= $days; $i++)
            <div class="card col-4">
                <div class="card-body">
                    Date : {{ $i }}/08/2020<br>
                    Day : 
                    <?php
                        //Our YYYY-MM-DD date string.
                        $date = "2020-08-".$i;
                        
                        //Convert the date string into a unix timestamp.
                        $unixTimestamp = strtotime($date);
                        
                        //Get the day of the week using PHP's date function.
                        $dayOfWeek = date("l", $unixTimestamp);
                        
                        //Print out the day that our date fell on.
                        echo $dayOfWeek;
                    ?>
                    <br>
                    <a href="{{ Route('attendance',['id'=>1,'date'=>'2020-08-'.$i]) }}">Click for attendance>></a>
                </div>
            </div>        
        @endfor
</div>
@endsection