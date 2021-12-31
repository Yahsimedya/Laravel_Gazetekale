@if (!empty($sondakika[0]->headline))

    <div id="nt-example2-container position-relative" class="container mt-1 padding-left">
        <ul id="nt-example2" class="p-0" style="height: 60px; overflow: hidden;">
            <div class="float-left h-100 d-inline" style="background-color: #f9df26;">
                <a href="{{route('breakingnews')}}"> <span class="p-2 align-middle" style="color:#262e62; line-height: 60px; font-weight: 500;">Son Dakika</span></a>
            </div>
            @foreach ($sondakika as $row)
                @if(($row->headline==1))

                    <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                        <li>
                            <i class="fa fa-fw state fa-play"></i>
                            <span class="hour">{{ Carbon\Carbon::parse($row->created_at)->isoFormat('HH:mm') }}</span> {{ $row->title_tr }}
                        </li>
                    </a>

                @endif
            @endforeach
        </ul>
    </div>

@endif
