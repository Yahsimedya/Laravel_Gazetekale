@php
    use Carbon\Carbon;
    use App\Models\Post;
    use App\Models\Category;
        $category=Category::get();
        $theme=\App\Models\Theme::first();
        $education = Post::where('category_id', $theme->category1)->where('status', 1)->where('featured', '=', 1)->limit(4)->latest('updated_at')->get();
        $kultur = Post::where('category_id', $theme->category2)->where('status', 1)->where('featured', '=', 1)->limit(4)->latest('updated_at')->get();



@endphp
<div class="col-md-8 padding-left mx-auto">

    <div class="card-header card-kutu position-relative">
        <div class="card-kutu__link"><i class="fa fa-align-left mr-2"></i>
            @foreach($category as $categorys)
                @if($categorys->id==$education[0]->category_id)
                    {{$categorys->category_tr}}

                @endif
            @endforeach
        </div>
        <a href="{{ URL::to('/Category/' . str_slug($education[0]->subcategory_tr) . $education[0]->category_id)}}">
            <div class="card-kutu__tum position-absolute ">Tümü</div>
        </a>
    </div>
    <div class="row padding-left mt-2">
        @foreach($education as $row)
            <div class="col-md-6 padding-left mt-1">
                <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                    <div class="card   d-inline-block  ">
                        <img class="card-img-top" src="{{$row->image}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" alt="Card image cap">
                        <div class="card-body align-middle d-table-cell">
                            <p class="card-baslik text-center d-table-cell"><b
                                    class="card-kisalt">{{$row->title_tr}}</b></p>
                            <span class="card__kategori position-absolute"></span>
                        </div>
                    </div>
                </a>
            </div>
    @endforeach
    <!--REKLAM ALANI-->
        <div class="col-md-6 col-12 mt-2 text-center ">
            <div class="reklam-alani ">
                <img src="img/336x280.png" alt="Reklam">
            </div>
        </div>
        <div class="col-md-6 col-12 mt-2 text-center ">
            <div class="reklam-alani ">
                <img src="img/336x280.png" alt="Reklam">
            </div>
        </div>
        <!--REKLAM ALANI-->
    </div>


    <div class="card-header card-kutu position-relative mt-2">
        <div class="card-kutu__link"><i class="fa fa-align-left mr-2"></i>

            @foreach($category as $categorys)
                @if($categorys->id==$kultur[0]->category_id)
                    {{$categorys->category_tr}}

                @endif
            @endforeach
        </div>
        <a href="{{ URL::to('/Category/' . str_slug($kultur[0]->subcategory_tr) . $kultur[0]->category_id)}}">
            <div class="card-kutu__tum position-absolute ">Tümü</div>
        </a>
    </div>
    <div class="row padding-left mt-2">
        @foreach($kultur as $row)
            <div class="col-md-6 padding-left mt-1">
                <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                    <div class="card   d-inline-block  ">
                        <img class="card-img-top" src="{{$row->image}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" alt="Card image cap">
                        <div class="card-body align-middle d-table-cell">
                            <p class="card-baslik text-center d-table-cell"><b
                                    class="card-kisalt">{{$row->title_tr}}</b></p>
                            <span class="card__kategori position-absolute"></span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>


</div>
