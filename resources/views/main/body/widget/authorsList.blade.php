<div class="col-md-4 padding-left position-relative">
    <div class="reklam-alani text-center">
        @foreach($ads as $ad)
            @if($ad->type==1 && $ad->category_id==16)
                <a href="{{$ad->link}}"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                             height="280"
                                             data-src="{{asset($ad->ads)}}"></a>
            @elseif($ad->type==2 && $ad->category_id==16)
                <div class="w-100">{!!$ad->ad_code!!}</div>
            @endif
        @endforeach
    </div>
    <div class="card-header card-yazarlar position-relative ">
     <div class="card-yazarlar__link text-left pad"><b>Köşe</b> Yazarlarımız</div>
        <a href="{{route('author')}}">
            <div class="card-yazarlar__tum position-absolute ">Tümü</div>
        </a>
    </div>
    @foreach($authors as $author)

        <a href="{{route('authors.yazilar',[str_slug($author->title),$author->id])}}">
            <div class="row  mt-2">
                <div class="col-md-4 col-4 col-sm-4">

                    <img src="{{asset($author->image)}}" class="rounded card-yazarlar__image lazyload img-fluid" alt="">
                </div>
                <div class="col-md-8 col-8 col-sm-8 align-middle d-inline-block">
                    <div class="d-inline-block align-middle">
                        <div class="card-yazarlar__isim d-inline-block">{{Str::limit($author->name,17)}}</div>
                        <div class="card-yazarlar__baslik d-table-cell "><p class="card-kisalt">{{$author->title}}</p></div>
                    </div>
                </div>

            </div>
        </a>
@endforeach


