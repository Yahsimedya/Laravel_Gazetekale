@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content">

        <form action="{{route('notification.send')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Başlık</label>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="title" required="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Bildirim İçeriği</label>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="body" required="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Resim Url</label>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="image"  class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Bildirim Türü</label>
                <div class="row">
                    <div class="col-lg-12">
                        <select name="bildirim_turu " class="col-lg-12" id="">
                            <option value="">Seçiniz</option>

                            <option value="haber_id">Haber</option>
                            <option value="son_dakika_id">Son Dakika</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Haber Id Giriniz</label>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="id"  class="form-control">
                    </div>
                </div>
            </div>
            <!-- <div class="form-group">
              <label>Sondakika ID Giriniz</label>
              <div class="row">
                <div class="col-xs-12">
                  <input type="text" name="son_dakika_id"  class="form-control">
                </div>
              </div>
            </div> -->
            <!-- <input type="text" name="bildirim_turu"> -->
            <button class="btn btn-success" type="submit" name="bildirimgonder">Gönder</button>
        </form>




</section>
@endsection
