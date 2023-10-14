@foreach ($fixedPage as $detail)
    @section('title', $detail->title)
    @section('meta_keywords', $detail->keyword)
    @section('meta_description', $detail->description)
    @extends('main.home_master')
@endforeach
@section('content')

    <section>



        <div class="container  mt-4 mb-4 ">
            <div class="row">
                <div class="col-md-3 mt-4 ">
                    <div class="bg-light
rounded shadow pt-4 pb-2">
                        {{-- {{ dd($allPages) }} --}}
                        @foreach ($allPages as $row)
                            <ul class="list">

                                <li class=" "><b><a
                                            href="{{ route('Open.fixedPage', [Str::slug($row->title), $row->id]) }}"
                                            class="text-dark">{{ $row->title }} </a></b></li>

                            </ul>
                        @endforeach

                    </div>
                </div>

                @foreach ($fixedPage as $detail)
                    <div class="col-md-9 mt-4 ">
                        <div class="bg-light
rounded shadow p-4">

                            <div class="detay__baslik ">
                                <div class="float-left mr-0 position-relative mt-0 float-right">

                                </div>
                                <h1 class="text-center p-4">{{ $detail->title }}</h1>

                            </div>
                            <p class="detay__spot">{!! $detail->content !!}</p>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-md-12 mt-0 mb-4">
                </div>
            </div>
        </div>


    </section>





@endsection
