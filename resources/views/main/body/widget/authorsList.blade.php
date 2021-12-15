<div class="col-md-4 padding-left position-relative">
    <div class="card-header card-yazarlar position-relative ">


        <div class="card-yazarlar__link text-left pad"><b>Köşe</b> Yazarlarımız</div>
        <a href="{{route('author')}}">
            <div class="card-yazarlar__tum position-absolute ">Tümü</div>
        </a>
    </div>
    @foreach($authors as $author)
        <a href="">
            <div class="row  mt-2">

                <div class="col-md-4 col-4 col-sm-4">
                    <img src="{{asset($author->image)}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" class="rounded card-yazarlar__image" alt="">
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


