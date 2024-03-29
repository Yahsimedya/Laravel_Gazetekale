@extends('admin.admin_master')
@section('admin')
    <div class="content">

        <div class="card">

            <div class="card-body">
                <form action="{{ route('websetting.update', $websetting) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $websetting->logo }}" name="old_image" class="form-control tokenfield">
                    <input type="hidden" value="{{ $websetting->logowhite }}" name="old_logowhite"
                        class="form-control tokenfield">
                    <input type="hidden" value="{{ $websetting->defaultImage }}" name="old_defaultImage"
                        class="form-control tokenfield">
                    <input type="hidden" value="{{ $websetting->video_logo }}" name="old_videoLogo"
                        class="form-control tokenfield">
                    <input type="hidden" value="{{ $websetting->site_favicon }}" name="old_siteFavicon"
                        class="form-control tokenfield">
                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Web Site Ayarları</legend>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Logo</label>
                            <div class="col-lg-10">

                                <img src="{{ asset($websetting->logo) }}" width="200" alt="">
                            </div>
                        </div>


                        <div class="form-group row">

                            <label class="col-form-label col-lg-2"> Logo</label>

                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="logo" class="form-control">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"> Beyaz Logo <br>
                                <p class="text-muted">Koyu zeminde gözükecek olan logo</p>
                            </label>

                            <div class="col-lg-10">

                                <img src="{{ asset($websetting->logowhite) }}" width="200" alt="">
                            </div>
                        </div>


                        <div class="form-group row">

                            <label class="col-form-label col-lg-2"> Beyaz Logo</label>

                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="logowhite" class="form-control">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"> Video Logo <br>
                                <p class="text-muted">Ana sayfa video bölümünde gözükecek olan logo</p>
                            </label>

                            <div class="col-lg-10">

                                <img src="{{ asset($websetting->video_logo) }}" width="200" alt="">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-form-label col-lg-2"> Video Section Logo</label>

                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="video_logo" class="form-control">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"> Site Favicon <br>
                                <p class="text-muted">favicon görseli 60x60 pixel</p>
                            </label>

                            <div class="col-lg-10">

                                <img src="{{ asset($websetting->site_favicon) }}" width="200" alt="">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-form-label col-lg-2"> Site Favicon</label>

                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="site_favicon" class="form-control">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Adres</label>
                            <div class="col-lg-10">
                                <input type="text" name="adress" value="{{ $websetting->adress }}"
                                    class="form-control">
                                @error('adress')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Email</label>
                            <div class="col-lg-10">
                                <input type="text" name="email" value="{{ $websetting->email }}" class="form-control">
                                @error('youtube')
                                    <span class="text-danger">{{ $email }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Telefon</label>
                            <div class="col-lg-10">
                                {{-- <input type="text" name="meta_description" value="{{$websetting->meta_description}}" class="form-control"> --}}
                                <input type="text" name="phone" class="form-control"
                                    value="{{ $websetting->phone }}">

                                @error('phone')
                                    <span class="text-danger">{{ $phone }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Hakkımızda</label>
                            <div class="col-lg-10">
                                {{-- <input type="text" name="google_analytics" value="{{$websetting->instagram}}" class="form-control"> --}}
                                <textarea name="about" cols="30" class="form-control" rows="10">{{ $websetting->about }}</textarea>
                                @error('about')
                                    <span class="text-danger">{{ $about }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Varsayılan Resim</label>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" class="form-input-styled" name="defaultImage" id="image"
                                        data-fouc>

                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <img width="100%" src="{{ asset($websetting->defaultImage) }}" id="showImage"
                                        alt="">
                                </div>

                            </div>


                        </div>


                        {{-- <div class="form-group row">
                            <label class="col-form-label col-lg-2">Input with placeholder</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" placeholder="Enter your username...">
                            </div>
                        </div> --}}
                        <button type="submit" class="btn bg-success float-right">Düzenle</button>
                </form>
            </div>
        </div>
    </div>
@endsection
