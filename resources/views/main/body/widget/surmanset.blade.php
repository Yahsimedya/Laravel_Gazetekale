<div class="container mt-2 ">
    <div class="row">
        @foreach($surmanset as $row)
            <div class="col-lg-3 col-md-6 col-sm-12 d-none d-md-block padding-left kartlar">
                <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                    <div class="card shadow  d-inline-block  ">
                        <img class="card-img-top" src="{{$row->image}}" alt="Card image cap">
                        <div class="card-body align-middle d-table-cell">
                            <p class="card-baslik text-center d-table-cell"><b
                                    class="card-kisalt">{{$row->title_tr}}</b></p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
