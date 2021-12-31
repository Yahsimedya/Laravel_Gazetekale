<section>
    <div class="container padding-left">
        <div class="namaz rounded shadow ">

            <div class="row padding-left mb-2 mt-2">
                <div
                    class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold"><span
                        class="text-light mb-0  namaz__kolon-text">
                         <div class="row">
                            <form id="form" class="text-center ">
                                @csrf
                                <select class="form-control form-control-sm namaz__select mb-1 ml-4" name="sehirsec">


                                    <option value="548">KIRIKKALE</option>

                                    @foreach($sehir as $row)
                                        <option value="{{$row->id}}">{{$row->sehir_ad}}</option>
                                    @endforeach
                                </select>
                            </form>
                            </div>

                </div>
                <div id="gotur" class="row col-lg-10">

                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="{{asset('image/imsak.png')}}" width="30" class="d-inline-block mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">İmsak {{$vakitler['imsak']}}</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="{{asset('image/ogle.png')}}" width="30" class="d-inline-block mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">Öğle {{$vakitler["ogle"]}}</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="{{asset('image/ikindi.png')}}" width="30" class="d-inline-block mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">İkindi {{$vakitler["ikindi"]}}</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="{{asset('image/aksam.png')}}" width="30" class="d-inline-block mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">Akşam {{$vakitler["aksam"]}}</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="{{asset('image/yatsi.png')}}" width="30" class="d-inline-block mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">Yatsı {{$vakitler["yatsi"]}}</span></div>
                    <div class="col-md-2 col-5 my-auto text-success text-center" style="font-size: 13px">
                        @php $now = Carbon\Carbon::now()->format('H:i');
                  $imsak = $vakitler["imsak"];
                                $gunes = $vakitler['gunes'];
                                $ogle = $vakitler['ogle'];
                                $ikindi = $vakitler['ikindi'];
                                $aksam = $vakitler['aksam'];
                                $yatsi = $vakitler['yatsi'];
                        @endphp
                        @if($now < $imsak )
                            @php $startTime = Carbon\Carbon::parse($now);
                    $finishTime = Carbon\Carbon::parse($gunes);
                $totalDuration = $finishTime->diff($startTime)->format('%H:%i');
                            @endphp

                            <div class="kalansure">
                                <span>{{ $totalDuration}}</span>
                                <p> İmsak'a Kalan Süre</p>
                            </div>


                        @elseif($now<$ogle )
                            @php $startTime = Carbon\Carbon::parse($now);
                    $finishTime = Carbon\Carbon::parse($ogle);
                $totalDuration = $finishTime->diff($startTime)->format('%H:%i');
                            @endphp

                            <div class="kalansure">
                                <span>{{ $totalDuration}}</span>
                                <p> Öğleye kalan Süre</p>
                            </div>
                        @elseif($now<$ikindi)
                            @php $startTime = Carbon\Carbon::parse($now);
                    $finishTime = Carbon\Carbon::parse($ikindi);
                $totalDuration = $finishTime->diff($startTime)->format('%H:%i');
                            @endphp
                            {{--                    <span style="    font-size: 16px;font-weight: 700;color: #006726;letter-spacing: .25px;padding: 5px 6px;background: #e6f0e7;display: block;position: relative;">{{ $totalDuration}}</span>--}}
                            <div class="kalansure">
                                <span>{{ $totalDuration}}</span>
                                <p>İkindi'ye Kalan Süre</p>
                            </div>
                        @elseif ($now<$aksam )
                            @php $startTime = Carbon\Carbon::parse($now);
                    $finishTime = Carbon\Carbon::parse($aksam);
                $totalDuration = $finishTime->diff($startTime)->format('%H:%i');
                            @endphp
                            <div class="kalansure">
                                <span>{{ $totalDuration}}</span>
                                <p>Akşam'a Kalan Süre</p>

                            </div>
                        @elseif($now<$yatsi )
                            @php $startTime = Carbon\Carbon::parse($now);
                    $finishTime = Carbon\Carbon::parse($yatsi);
                $totalDuration = $finishTime->diff($startTime)->format('%H:%i');
                            @endphp
                            <div class="kalansure">
                                <span>{{ $totalDuration}}</span>
                                <p>Yatsıy'a Kalan Süre</p>
                            </div>


                        @endif
                    </div>


                </div>
                <div class="row col-lg-10" id="al">


                </div>

            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function (e) {
        $('#form select').on('change', function () {
            e = $('#sehirsec').val();
            $.ajax({
                type: "POST",
                url: "{{route('il.namaz')}}",
                headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                data: $('#form').serialize(),
                // dataType:"json",
                success: function (donen) {
                    veri = donen;
                    $('#sehirsec').attr("disabled", false);
                    $('#al').html(veri);
                    console.log(veri);
                },
            })
            $('#gotur').hide();
        });
    });
</script>
