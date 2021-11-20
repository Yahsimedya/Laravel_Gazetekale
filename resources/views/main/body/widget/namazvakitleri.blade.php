<section>
    <div class="container padding-left">
        <div class="namaz rounded shadow ">

            <div class="row padding-left mb-2 mt-2">
                <div
                    class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold"><span
                        class="text-light mb-0  namaz__kolon-text">
                         <div class="row">
                            <form id="form" class="text-center pb-3">
                                @csrf
                                <select class="form-control form-control-sm namaz__select mb-1 ml-4" name="sehirsec"
                                >
                                    <option value="548">KIRIKKALE</option>

                                    @foreach($sehir as $row)
                                        <option value="{{$row->id}}">{{$row->sehir_ad}}</option>
                                    @endforeach
                                </select>
                            </form>
                            </div>

                </div>
                <div id="gotur" class="row">

                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="img/imsak.png" width="30" class="img-fluid mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">İmsak {{$vakitler['imsak']}}</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="img/ogle.png" width="30" class="img-fluid mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">öğle {{$vakitler["ogle"]}}</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="img/ikindi.png" width="30" class="img-fluid mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">İkindi {{$vakitler["ikindi"]}}</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="img/aksam.png" width="30" class="img-fluid mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">Akşam {{$vakitler["aksam"]}}</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="img/yatsi.png" width="30" class="img-fluid mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">Yatsı {{$vakitler["yatsi"]}}</span></div>


                </div>
                <div class="row" id="al">


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
