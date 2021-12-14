@extends('main.home_master')
{{--@section('title',$sehir->district_tr)--}}
{{--@section('meta_keywords',$sehir->district_keywords)--}}
{{--@section('meta_description',$sehir->district_description)--}}
@section('content')
    <div class="container">
        <div class="row">
            <?php
            date_default_timezone_set('Europe/Istanbul');
            setlocale(LC_TIME, "turkish"); //başka bir dil içinse burada belirteceksin.
            setlocale(LC_ALL, 'turkish'); //başka bir dil içinse burada belirteceksin.
            ?>
        </div>
        <div class="position-relative pt-4">

            <form action="{{route('nobetciEczanePost')}}" method="POST" class="row">
                @csrf
                <select name="sehir_ad" id="" class="form-control col-md-9 col-12">
                    <option value="kirikkale">KIRIKKALE</option>

                    @foreach($sehirs as $row)
                        <option value="{{$row->district_tr}}">{{$row->district_tr}}</option>
                    @endforeach
                </select>
                <button type="submit" name="sehir_getir" class="button button--green col-md-3 col-12">GETİR</button>
            </form>

            {{iconv('latin5', 'utf-8', strftime(' %d %B %Y %A '))}}
        </div>

        <div class="row mt-2">
            <div style="position: relative;top: 50%;left: 50%;transform: translate(-50%, -30%);color: #af0f0a;">
                {!!$data!!}</div>
            @foreach($data3 as $row)
                {!! $row !!}

            @endforeach


        </div>

    </div>
@endsection


