@extends('main.home_master')
@section('content')
        <section class="">
            <div class="container bg-light mt-3 mb-3 shadow rounded">
                <div class="row">
                    <div class="col-md-12"><br />
                        <div class=" bg-light mt-3 border-bottom pb-3 pt-3">
                            <div class=" "><h3 class="text-secondary"><i class="fa fa-search mr-2 text-danger"></i>Arama Sonuçları</h3></div>
                        </div>
                    </div>
                </div>
                <div class="row">
@foreach($searchNews as $row)
                    <a style="text-decoration: none; color: #565555;width:100%;" class="pr-5" href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}"><div class="row mb-2 mt-2 pl-3">
                            <div class="col-md-2"><img width="150" src="{{asset($row->image)}}"/></div>
                            <div class="col-md-10"><b>{{$row->title_tr}}</b><br />
                                {{$row->subtitle_tr}}</div><hr>
                        </div></a>
                    @endforeach
                </div>
            </div>
        </section>
@endsection
