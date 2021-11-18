<!-- Main sidebar -->
@php
$photo=DB::table('users')->where('id','=',Auth::user()->id)->get();
@endphp

<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="/{{$photo[0]->profile_photo_path}}" width="38"
                                         height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">{{Auth::user()->name}}</div>
                        <div class="font-size-xs opacity-50">
                            {{Auth::user()->email}}
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div>
                    <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#kategori" class="nav-link"><i class="icon-copy" id="kategori"></i>
                        <span>Kategoriler</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('categories')}}" class="nav-link active">Kategori</a></li>
                        <li class="nav-item"><a href="{{ route('subcategories')}}" class="nav-link">Alt Kategori</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#bolge" class="nav-link"><i class="icon-copy"></i> <span>Bölge Yönetimi</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('district')}}" class="nav-link active">Bölgeler</a></li>
                        <li class="nav-item"><a href="{{route('subdistrict')}}" class="nav-link">Alt Bölgeler</a></li>

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#bolge" class="nav-link"><i class="icon-copy"></i> <span>Haberler</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('add.post')}}" class="nav-link active">Haber Ekle</a></li>
                        <li class="nav-item"><a href="{{route('all.post')}}" class="nav-link">Tüm Haberler</a></li>

                    </ul>
                </li>



                <li class="nav-item nav-item-submenu">
                    <a href="#ads" class="nav-link"><i class="icon-gear"></i> <span>İha Bot Ayarı</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('setting.settingindex')}}" class="nav-link "><i
                                    class="icon-list"></i> <span>Bot Ayarları</span></a></li>
                        <li class="nav-item"><a href="{{route('addpage.iha')}}" class="nav-link
"><i
                                    class="icon-list"></i> <span>Haber Ekle</span></a></li>

                        {{--                        <li class="nav-item"><a href="{{route('seo.setting')}}" class="nav-link">SEO Ayarları</a></li>--}}

                    </ul>
                </li>


                <li class="nav-item nav-item-submenu">
                    <a href="#ads" class="nav-link"><i class="icon-gear"></i> <span>AA Bot Ayarı</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('anadoluajans.settingindex')}}" class="nav-link "><i
                                    class="icon-list"></i> <span>Bot Ayarları</span></a></li>
                        <li class="nav-item"><a href="{{route('anadoluajans.index')}}" class="nav-link
"><i
                                    class="icon-list"></i> <span>Haber Ekle</span></a></li>

                        {{--                        <li class="nav-item"><a href="{{route('seo.setting')}}" class="nav-link">SEO Ayarları</a></li>--}}

                    </ul>
                </li>


                <li class="nav-item nav-item-submenu">
                    <a href="#photogaleri" class="nav-link"><i class="icon-gear"></i> <span>Galeri</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('galeri.categories')}}" class="nav-link active"><i
                                    class="icon-list"></i> <span>Foto Galeri Kategori</span></a></li>
                        <li class="nav-item"><a href="{{route('photo.galery')}}" class="nav-link active"><i
                                    class="icon-list"></i> <span>Foto Galeri</span></a></li>
                        {{-- <li class="nav-item"><a href="{{route('seo.setting')}}" class="nav-link">SEO Ayarları</a></li> --}}

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#ads" class="nav-link"><i class="icon-gear"></i> <span>Reklam Yönetimi</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('list.add')}}" class="nav-link active"><i
                                    class="icon-list"></i> <span>Reklam Alanları</span></a></li>
                        {{--                        <li class="nav-item"><a href="{{route('seo.setting')}}" class="nav-link">SEO Ayarları</a></li>--}}

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#ads" class="nav-link"><i class="icon-gear"></i> <span>Köşe Yazarları Yönetimi</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('list.authorsposts')}}" class="nav-link active"><i
                                    class="icon-list"></i> <span>Köşe Yazıları</span></a></li>
                        <li class="nav-item"><a href="{{route('list.authors')}}" class="nav-link active"><i
                                    class="icon-list"></i> <span>Yazarlar</span></a></li>

                        {{--                        <li class="nav-item"><a href="{{route('seo.setting')}}" class="nav-link">SEO Ayarları</a></li>--}}

                    </ul>
                </li>





                <li class="nav-item">
                    <a href="{{route('fixedpage.index')}}" class="nav-link">
                        <i class="icon-stack2"></i>
                        <span>Sabit Sayfalar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('comments.index')}}" class="nav-link">
                        <i class="icon-comment"></i>
                        <span>Yorumlar</span>
                    </a>
                </li>  <li class="nav-item">
                    <a href="{{route('notification.index')}}" class="nav-link">
                        <i class="icon-bubble-notification"></i>
                        <span>Bildirim Gönder</span>
                    </a>
                </li>




                <li class="nav-item nav-item-submenu">
                    <a href="#settings" class="nav-link"><i class="icon-user"></i> <span>Kullanıcı İşlemleri</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">

                        <li class="nav-item"><a href="{{route('user.index')}}" class="nav-link active"><i
                                    class="icon-list"></i> <span>Kullanıcılar</span></a></li>



                    </ul>
                </li>






                <li class="nav-item nav-item-submenu">
                    <a href="#settings" class="nav-link"><i class="icon-gear"></i> <span>Ayarlar</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">

                        <li class="nav-item"><a href="{{route('social.setting')}}" class="nav-link active"><i
                                    class="icon-list"></i> <span>Sosyal Medya Ayarları</span></a></li>
                        <li class="nav-item"><a href="{{route('seo.setting')}}" class="nav-link">SEO Ayarları</a></li>
                        <li class="nav-item"><a href="{{route('website.setting')}}" class="nav-link active"><i
                                    class="icon-list"></i> <span>Genel Ayarlar</span></a></li>
<li class="nav-item"><a href="{{route('theme.index')}}" class="nav-link active"><i
                                    class="icon-list"></i> <span>Tema Ayarları</span></a></li>
                    </ul>
                </li>


            </ul>


        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
