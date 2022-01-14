<div class="container mt-3 kartlar">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 padding-left ">
            <div class="card font-weight-light shadow">
                <h5 class="card-header kartlar__header bg-white">Gündem</h5>

                <div class="position-relative">
                    <a href="{{URL::to('/haber-'.str_slug($gundemcard[0]->title_tr).'-'.$gundemcard[0]->id)}}" class="kartlar__link">
                        <img class="card-img-top position-relative rounded-0 lazyload img-fluid" src="{{$gundemcard[0]->image}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';"
                             alt="Card image cap">
                        @if($webSiteSetting->slider_title==1)
                        <div class="kartlar__effect position-absolute"></div>
                        @endif
                    </a>
                </div>
                @if($webSiteSetting->slider_title==1)
                <div class="card-body kartlar__body position-absolute" style="top:30%!important;">
                    <h5 class="card-title">
                        {{$gundemcard[0]->title_tr}}

                    </h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>
                @endif
                <ul class="list-group list-group-flush">
                    @foreach ($gundemcard as $row)
                        <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="{{asset($row->image)}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" width="150" class="float-left p-2 lazyload img-fluid" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt "> {{$row->title_tr}} </p>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>

            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 padding-left ">
            <div class="card font-weight-light shadow">
                <h5 class="card-header kartlar__header bg-white">Siyaset</h5>

                <div class="position-relative">
                    <a href="{{URL::to('/haber-'.str_slug($siyasetcard[0]->title_tr).'-'.$siyasetcard[0]->id)}}" class="kartlar__link">
                        <img class="card-img-top position-relative rounded-0 lazyload img-fluid" src="{{$siyasetcard[0]->image}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';"
                             alt="Card image cap">
                        @if($webSiteSetting->slider_title==1)
                            <div class="kartlar__effect position-absolute"></div>
                        @endif
                    </a>
                </div>@if($webSiteSetting->slider_title==1)
                <div class="card-body kartlar__body position-absolute" style="top:30%!important;">
                    <h5 class="card-title">

                        {{$siyasetcard[0]->title_tr}}

                    </h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>   @endif
                <ul class="list-group list-group-flush">
                    @foreach ($siyasetcard as $row )


                        <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="{{asset($row->image)}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" width="150" class="float-left p-2 lazyload img-fluid" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">
                                        {{$row->title_tr}} </p>
                                </div>
                            </li>
                        </a>

                    @endforeach


                </ul>

            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 padding-left ">
            <div class="card font-weight-light shadow">
                <h5 class="card-header kartlar__header bg-white">Ekonomi</h5>

                <div class="position-relative">
                    <a href="{{URL::to('/haber-'.str_slug($ekonomicard[0]->title_tr).'-'.$ekonomicard[0]->id)}}" class="kartlar__link">
                        <img class="card-img-top position-relative rounded-0 lazyload img-fluid" src="{{$ekonomicard[0]->image}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';"
                             alt="Card image cap">
                        @if($webSiteSetting->slider_title==1)
                            <div class="kartlar__effect position-absolute"></div>
                        @endif
                    </a>
                </div> @if($webSiteSetting->slider_title==1)
                <div class="card-body kartlar__body position-absolute" style="top:30%!important;">
                    <h5 class="card-title">

                        {{$ekonomicard[0]->title_tr}}

                    </h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div> @endif
                <ul class="list-group list-group-flush">
                    @foreach ($ekonomicard as $row )


                        <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="{{asset($row->image)}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" width="150" class="float-left p-2 lazyload img-fluid" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">
                                       {{$row->title_tr}}
                                    </p>
                                </div>
                            </li>
                        </a>

                    @endforeach


                </ul>

            </div>
        </div>
    </div>
</div>
