
    @section('title',"")
@section('meta_keywords',"")
@section('meta_description',"")
@extends('main.home_master')

@section('content')

    @php
        $webSiteSetting=DB::table('website_settings')->first();
    @endphp

<section class="">
    <div class="container bg-light mt-3 mb-3 shadow rounded ">
        <div class="row padding-left">
            <div class="col-md-12">
                <div class=" bg-light mt-3 border-bottom pb-3 pt-3">
                    <div class=" "><h3 class="text-secondary"><i class="fa fa-align-left mr-2 text-danger"></i>Yazarlarımız</h3></div>
                </div>
            </div>
            @foreach($authors as $author)

            <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="row bg-dark m-2 padding-left p-0 rounded">
                    <div class="col-lg-4  col-md-4 col-sm-4 col-4  p-0">
                        <img src="{{asset($author->image)}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8  col-md-8 col-sm-8 col-8">
                        <p class="mt-3 mb-0 text-light">{{Str::limit($author->name,17)}}</p>
                        <p class="text-light pb-1 mb-0 border-secondary border-bottom">{{$author->title}}</p>
                        <a href="{{route('authors.yazilar',[str_slug($author->title),$author->id])}}" class=" position-relative text-light"><i class=" fa fa-caret-right mr-1"></i>Son Makaleyi Oku</a>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection
