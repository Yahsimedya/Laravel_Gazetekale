@foreach($fixedPage as $detail)
    @section('title',$detail->title)
@section('meta_keywords',$detail->keyword)
@section('meta_description',$detail->description)
@extends('main.home_master')

@section('content')
    @endforeach
        <section>

            <div class="container bg-light mt-4 mb-4 rounded shadow">

                <div class="row">

                    <div class="col-md-12 mt-4">


                        <div class="detay__baslik ">
                            <div class="float-left mr-0 position-relative mt-0 float-right">

                            </div>
                            <h1>{{$detail->title}}</h1>

                        </div>
                        <p class="detay__spot">{!! $detail->content !!}</p>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 mt-0 mb-4">
                    </div>
                </div>
            </div>


        </section>





@endsection
