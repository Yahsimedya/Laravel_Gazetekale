<section>
    <div class="container padding-left">
        <div class="namaz rounded shadow ">

            <div class="row padding-left mb-2 mt-2">
                <div
                    class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold"><span
                        class="text-light mb-0  namaz__kolon-text">
                         <div class="row">
                            <form id="form" class="text-center ">
                                <?php echo csrf_field(); ?>
                                <select class="form-control form-control-sm namaz__select mb-1 ml-4" name="sehirsec">


                                    <option value="548">KIRIKKALE</option>

                                    <?php $__currentLoopData = $sehir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id); ?>"><?php echo e($row->sehir_ad); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </form>
                            </div>

                </div>
                <div id="gotur" class="row col-lg-10">

                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="<?php echo e(asset('image/imsak.png')); ?>" width="30" class="d-inline-block mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">İmsak <?php echo e($vakitler['imsak']); ?></span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="<?php echo e(asset('image/ogle.png')); ?>" width="30" class="d-inline-block mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">Öğle <?php echo e($vakitler["ogle"]); ?></span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="<?php echo e(asset('image/ikindi.png')); ?>" width="30" class="d-inline-block mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">İkindi <?php echo e($vakitler["ikindi"]); ?></span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="<?php echo e(asset('image/aksam.png')); ?>" width="30" class="d-inline-block mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">Akşam <?php echo e($vakitler["aksam"]); ?></span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="<?php echo e(asset('image/yatsi.png')); ?>" width="30" class="d-inline-block mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">Yatsı <?php echo e($vakitler["yatsi"]); ?></span></div>
                    <div class="col-md-2 col-5 my-auto text-success text-center" style="font-size: 13px">
                        <?php $now = Carbon\Carbon::now()->format('H:i');
                  $imsak = $vakitler["imsak"];
                                $gunes = $vakitler['gunes'];
                                $ogle = $vakitler['ogle'];
                                $ikindi = $vakitler['ikindi'];
                                $aksam = $vakitler['aksam'];
                                $yatsi = $vakitler['yatsi'];
                        ?>
                        <?php if($now < $imsak ): ?>
                            <?php $startTime = Carbon\Carbon::parse($now);
                    $finishTime = Carbon\Carbon::parse($gunes);
                $totalDuration = $finishTime->diff($startTime)->format('%H:%i');
                            ?>

                            <div class="kalansure">
                                <span><?php echo e($totalDuration); ?></span>
                                <p> İmsak'a Kalan Süre</p>
                            </div>


                        <?php elseif($now<$ogle ): ?>
                            <?php $startTime = Carbon\Carbon::parse($now);
                    $finishTime = Carbon\Carbon::parse($ogle);
                $totalDuration = $finishTime->diff($startTime)->format('%H:%i');
                            ?>

                            <div class="kalansure">
                                <span><?php echo e($totalDuration); ?></span>
                                <p> Öğleye kalan Süre</p>
                            </div>
                        <?php elseif($now<$ikindi): ?>
                            <?php $startTime = Carbon\Carbon::parse($now);
                    $finishTime = Carbon\Carbon::parse($ikindi);
                $totalDuration = $finishTime->diff($startTime)->format('%H:%i');
                            ?>
                            
                            <div class="kalansure">
                                <span><?php echo e($totalDuration); ?></span>
                                <p>İkindi'ye Kalan Süre</p>
                            </div>
                        <?php elseif($now<$aksam ): ?>
                            <?php $startTime = Carbon\Carbon::parse($now);
                    $finishTime = Carbon\Carbon::parse($aksam);
                $totalDuration = $finishTime->diff($startTime)->format('%H:%i');
                            ?>
                            <div class="kalansure">
                                <span><?php echo e($totalDuration); ?></span>
                                <p>Akşam'a Kalan Süre</p>

                            </div>
                        <?php elseif($now<$yatsi ): ?>
                            <?php $startTime = Carbon\Carbon::parse($now);
                    $finishTime = Carbon\Carbon::parse($yatsi);
                $totalDuration = $finishTime->diff($startTime)->format('%H:%i');
                            ?>
                            <div class="kalansure">
                                <span><?php echo e($totalDuration); ?></span>
                                <p>Yatsıy'a Kalan Süre</p>
                            </div>


                        <?php endif; ?>
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
                url: "<?php echo e(route('il.namaz')); ?>",
                headers: {'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'},
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
<?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/main/body/widget/namazvakitleri.blade.php ENDPATH**/ ?>