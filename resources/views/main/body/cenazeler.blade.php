@extends('main.home_master')
@section('content')
    <div class="container mt-3">


        <div class="container bg-light mt-3 mb-5 shadow rounded">
            {!! $baslik !!}
            @foreach($data2 as $row)
                {!! $row !!}
            @endforeach
        </div>
    </div>
@endsection
