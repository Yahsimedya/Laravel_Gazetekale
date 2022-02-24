<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Authors;
use App\Models\AuthorsPost;
use App\Models\Comments;
use App\Models\District;
use App\Models\FixedPage;
use App\Models\Gazetesayis;
use App\Models\OrderImages;
use App\Models\Photo;
use App\Models\Photocategory;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Sehirler;
use App\Models\Seos;
use App\Models\Subcategory;
use App\Models\Subdistrict;
use App\Models\Tag;
use App\Models\Theme;
use App\Models\User;
use App\Models\Vakitler;
use App\Models\WebsiteSetting;
use Carbon\Carbon;
use GuzzleHttp\ClientInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Session;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

//use PublicApi;
class ExtraController extends Controller
{
//    public function GetSubDistrict($district_id)
//    {
//        $districts = Subdistrict::where('district_id',$district_id)->get();
//
//        return response()->json($districts);
//    }

    public function redirect($slug)
    {

        /*   $r = $_SERVER['REQUEST_URI'];
           $r = explode('?', $r);
           $r = array_filter($r);
           $r = array_merge($r, array());
           $id = $r[0];
           $id = explode('-', $id);
           $id = array_filter($id);
           $id = array_merge($id, array());
           $idCount = count($id) - 1;
           $alinanID = $id[$idCount];
           $replaced = Str::of($r[0])->replace('-' . $alinanID, '-' . $alinanID);
           return Redirect::to($replaced);
   */
    }

    public function haberFotoTrans()
    {
        ini_set('max_execution_time', 0);
        $OrderImagesEski = DB::table('haber_foto')->get();//eklenecek eski köşe yazıları tablosu
        $yeniData = array();
        DB::beginTransaction();
        $savedcount = 0;
        $unsavedcount = 0;


        for ($i = 1; $i <= count($OrderImagesEski) - 1; $i++) {
            $OrderImagespost = OrderImages::insert([
                "id" => $OrderImagesEski[$i]->haberfoto_id,
                "haberId" => $OrderImagesEski[$i]->haber_id,
                "image" => "storage/postimg/" . $OrderImagesEski[$i]->haberfoto_resimyol,
            ]);
            if ($OrderImagespost > 0) {
                $savedcount++;
            } else {
                $unsavedcount++;
            }

        }
        if ($unsavedcount > 0) {
            DB::rollBack();
        } else {
            DB::commit();
        }
        return "Veri taşıma başarılı";

    }

    public function DBTrans()
    {


        ini_set('max_execution_time', 0);
        $habereski = DB::table('haber')->get();//eklenecek eski haber tablosu
        $yeniData = array();
        DB::beginTransaction();
        $savedcount = 0;
        $unsavedcount = 0;

        for ($i = 1; $i <= count($habereski) - 1; $i++) {
            if ($habereski[$i]->kategori_id == 66) {
                $newCategoryId = 1;
            } elseif ($habereski[$i]->kategori_id == 11) {
                $newCategoryId = 2;
            } elseif ($habereski[$i]->kategori_id == 36) {
                $newCategoryId = 2;
            } elseif ($habereski[$i]->kategori_id == 67) {
                $newCategoryId = 2;
            } elseif ($habereski[$i]->kategori_id == 9) {
                $newCategoryId = 2;
                //Gündem haberleri

            } elseif ($habereski[$i]->kategori_id == 38) {
                $newCategoryId = 3;
            } elseif ($habereski[$i]->kategori_id == 51) {
                $newCategoryId = 4;


            } elseif ($habereski[$i]->kategori_id == 13) {
                $newCategoryId = 5;
            } elseif ($habereski[$i]->kategori_id == 10) {
                $newCategoryId = 6;


            } elseif ($habereski[$i]->kategori_id == 39) {
                $newCategoryId = 7;

            } elseif ($habereski[$i]->kategori_id == 52) {
                $newCategoryId = 8;


            } elseif ($habereski[$i]->kategori_id == 49) {
                $newCategoryId = 9;
            } elseif ($habereski[$i]->kategori_id == 64) {
                $newCategoryId = 10;
            } elseif ($habereski[$i]->kategori_id == 36) {
                $newCategoryId = 11;
            } elseif ($habereski[$i]->kategori_id == 71) {
                $newCategoryId = 12;
            }
            $newImagesroute = "storage/postimg/" . $habereski[$i]->haberfoto_resimyol;

            $yeniposts = Post::insert([
                "id" => $habereski[$i]->haber_id,
                "created_at" => $habereski[$i]->haber_zaman,
                "title_tr" => $habereski[$i]->haber_ad,
                "slug_tr" => $habereski[$i]->haber_seourl,
                "details_tr" => $habereski[$i]->haber_detay,
                "subtitle_tr" => $habereski[$i]->haber_spot,
                "title_en" => $habereski[$i]->haber_ad,
                "slug_en" => $habereski[$i]->haber_seourl,
                "details_en" => $habereski[$i]->haber_detay,
                "subtitle_en" => $habereski[$i]->haber_spot,
                "featured" => $habereski[$i]->haber_onecikar,
                "status" => $habereski[$i]->haber_durum,
                "posts_video" => $habereski[$i]->haber_video,
                "keywords_tr" => $habereski[$i]->haber_keyword,
                "keywords_en" => $habereski[$i]->haber_keyword,
                "image" => $newImagesroute,
                "manset" => 1,
                "surmanset" => $habereski[$i]->haber_surmanset,
                "description_tr" => $habereski[$i]->haber_description,
                "description_en" => $habereski[$i]->haber_description,
                "headline" => $habereski[$i]->haber_sondakika,
                "category_id" => $newCategoryId,
                "district_id" => 71,

            ]);
            if ($yeniposts > 0) {
                $savedcount++;
            } else {
                $unsavedcount++;
            }

        }
        if ($unsavedcount > 0) {
            DB::rollBack();
        } else {
            DB::commit();
        }
        return $this->OldDBkoseyazisi();

    }

    public function OldDBkoseyazisi()
    {
        ini_set('max_execution_time', 0);
        $koseyazisieski = DB::table('kose_yazilari')->get();//eklenecek eski köşe yazıları tablosu
        $yeniData = array();
        DB::beginTransaction();
        $savedcount = 0;
        $unsavedcount = 0;

        for ($i = 1; $i <= count($koseyazisieski) - 1; $i++) {
            $yenikoseyazisi = AuthorsPost::insert([
                "id" => $koseyazisieski[$i]->koseyazisi_id,
                "authors_id" => $koseyazisieski[$i]->yazar_id,
                "text" => $koseyazisieski[$i]->koseyazisi_detay,
                "title" => $koseyazisieski[$i]->koseyazisi_baslik,
                "created_at" => $koseyazisieski[$i]->koseyazisi_zaman,
                "created_at" => $koseyazisieski[$i]->koseyazisi_zaman,
                "status" => $koseyazisieski[$i]->koseyazisi_durum == null ? 1 : $koseyazisieski[$i]->koseyazisi_durum,
                "image" => "",
                "keywords" => $koseyazisieski[$i]->koseyazisi_keyword,
                "description" => $koseyazisieski[$i]->koseyazisi_descripton,
            ]);
            if ($yenikoseyazisi > 0) {
                $savedcount++;
            } else {
                $unsavedcount++;
            }

        }
        if ($unsavedcount > 0) {
            DB::rollBack();
        } else {
            DB::commit();
        }
        return "Veri taşıma başarılı";

    }

    public function OldDByazarlar()
    {
        ini_set('max_execution_time', 0);
        $koseyazisieski = DB::table('kullanici')->get();//eklenecek eski köşe yazıları tablosu
        $yeniData = array();
        DB::beginTransaction();
        $savedcount = 0;
        $unsavedcount = 0;

        for ($i = 1; $i <= count($koseyazisieski) - 1; $i++) {
            $yenikoseyazisi = Authors::insert([
                "id" => $koseyazisieski[$i]->kullanici_id,
                "name" => $koseyazisieski[$i]->kullanici_ad,
                "image" => $koseyazisieski[$i]->kullanici_resim == null ? "" : $koseyazisieski[$i]->kullanici_resim,
                "status" => $koseyazisieski[$i]->kullanici_durum,
                "mail" => $koseyazisieski[$i]->kullanici_mail,
                "facebook" => $koseyazisieski[$i]->kullanici_facebook,
                "twitter" => $koseyazisieski[$i]->kullanici_twitter,
                "youtube" => $koseyazisieski[$i]->kullanici_youtube,

            ]);
            if ($yenikoseyazisi > 0) {
                $savedcount++;
            } else {
                $unsavedcount++;
            }

        }
        if ($unsavedcount > 0) {
            DB::rollBack();
        } else {
            DB::commit();
        }
        return "Veri taşıma başarılı";

    }

    public function PhotoGalleryDetail($photogalery)
    {
        $category = Photo::leftjoin('photocategories', 'photos.photocategory_id', '=', 'photocategories.id')
            ->select(['photos.*', 'photocategories.id', 'photocategories.category_title'])
            ->where('photos.photocategory_id', $photogalery)
            ->first();
        $photos = Photo::leftjoin('photocategories', 'photos.photocategory_id', '=', 'photocategories.id')
            ->select(['photos.*', 'photocategories.id', 'photocategories.category_title'])
            ->where('photos.photocategory_id', $photogalery)
            ->get();
        $relatedgalery = Photo::where('status', 1)->skip(1)->take(10)->groupBy('photocategory_id')->latest()->get();

//    $relatedgalery =Photo::leftjoin('photocategories','photos.photocategory_id','=','photocategories.id')
//        ->select(['photos.*','photocategories.id','photocategories.category_title'])
//        ->where('photos.photocategory_id',$photogalery)->where('photos.photocategory_id','!=',$photos->photocategory_id)->groupBy('photocategory_id')
//        ->get();

        return view('main.body.foto_galery', compact('photos', 'category', 'relatedgalery'));
    }

    public function Etiket($name, $id)
    {

        $tagPosts = Post::leftjoin('post_tags', 'posts.id', 'post_tags.post_id')
            ->leftjoin('tags', 'tags.id', 'post_tags.tag_id')
            ->leftjoin('categories', 'posts.category_id', '=', 'categories.id')
            ->select(['posts.*', 'post_tags.post_id', 'tags.id', 'tags.name', 'categories.id'])
            ->groupBy('post_tags.post_id')
            ->where('post_tags.tag_id', $id)->where('status', 1)->latest()
            ->get();
//       echo $category = $tagPosts->category_id;
//        foreach ($category as $object){
//         $object->title;
//        }
        $nextnews = Post::leftjoin('post_tags', 'posts.id', 'post_tags.post_id')
            ->leftjoin('tags', 'tags.id', 'post_tags.tag_id')
            ->leftjoin('categories', 'posts.category_id', '=', 'categories.id')
            ->select(['posts.*', 'post_tags.post_id', 'tags.id', 'tags.name', 'categories.id'])
            ->groupBy('posts.id')
            ->where('post_tags.tag_id', $id)->where('status', 1)->whereDate('posts.created_at', '>', \Carbon\Carbon::parse()->now()->subYear())
            ->inRandomOrder()
            ->get();
        $count = Post::leftjoin('post_tags', 'posts.id', 'post_tags.post_id')
            ->leftjoin('tags', 'tags.id', 'post_tags.tag_id')
            ->select(['posts.*', 'post_tags.post_id', 'tags.id', 'tags.name'])
            ->where('post_tags.tag_id', $id)->latest()
            ->count();
        $ads = Ad::leftjoin('ad_categories', 'ads.category_id', '=', 'ad_categories.id')
//            ->join('ads','ad_categories.id','ads.category_id')
            ->select(['ads.*', 'ad_categories.id'])
            ->where('status', 1)
            ->whereIN('ad_categories.id', [1, 2, 3, 12]) // ad_categories tablosunda bulunan ve haber detayda görünmesi gereken id'ler
            ->get();
        return view('main.body.tags', compact('tagPosts', 'count', 'nextnews', 'ads'));
    }

    public function feed()
    {


        $seoset = Cache::remember("seoset", Carbon::now()->addYear(), function () {
            if (Cache::has('seoset')) return Cache::has('seoset');
            return Seos::first();
        });

        $posts = Cache::remember("posts", Carbon::now()->addYear(), function () {
            if (Cache::has('posts')) return Cache::has('posts');
            return Post::leftjoin('categories', 'posts.category_id', '=', 'categories.id')
                ->leftjoin('subcategories', 'posts.subcategory_id', '=', 'subcategories.id')
                ->leftjoin('districts', 'posts.district_id', '=', 'districts.id')
                ->leftjoin('subdistricts', 'posts.subdistrict_id', 'subdistricts.id')
                ->select(['posts.*', 'categories.category_tr', 'districts.district_tr', 'subdistricts.subdistrict_tr'])
                ->latest('created_at')->where('status', 1)->limit(10)
                ->get();

        });
        return response()->view('main.body.feed', compact('posts', 'seoset'))->header('Content-Type', 'application/xml');

    }

    public function GetAllDistrict()
    {
        return view('main.body.turkey_map');
    }

    public function GetDistrict($id) // türkiye haritasında illere tıkladığında il detay sayfasına gider
    {


        $sehirsay = Post::leftjoin('categories', 'posts.category_id', '=', 'categories.id')
            ->leftjoin('subcategories', 'posts.subcategory_id', '=', 'subcategories.id')
            ->leftjoin('districts', 'posts.district_id', '=', 'districts.id')
            ->leftjoin('subdistricts', 'posts.subdistrict_id', 'subdistricts.id')
            ->where('districts.slug', $id)
            ->select(['posts.*', 'categories.category_tr', 'districts.district_tr', 'subdistricts.subdistrict_tr'])
            ->latest('created_at')
            ->count();

        $sehir = District::where('slug', $id)
            ->firstOrFail();


        $districts = Post::leftjoin('categories', 'posts.category_id', '=', 'categories.id')
            ->leftjoin('subcategories', 'posts.subcategory_id', '=', 'subcategories.id')
            ->leftjoin('districts', 'posts.district_id', '=', 'districts.id')
            ->leftjoin('subdistricts', 'posts.subdistrict_id', 'subdistricts.id')
            ->where('districts.slug', $id)
            ->select(['posts.*', 'categories.category_tr', 'districts.district_tr', 'districts.district_keywords', 'districts.district_description', 'subdistricts.subdistrict_tr'])
            ->latest('created_at')->limit(50)
            ->get();

        $subdistricts = Subdistrict::leftjoin('districts', 'districts.id', '=', 'subdistricts.district_id')
            ->where('districts.slug', $id)
            ->get();
        $alldistrict = District::get();

        return view('main.body.district', compact('districts', 'sehir', 'sehirsay', 'subdistricts', 'alldistrict'));
    }

    //
    /*   public function English()
       {
           Session::get('lang');
           Session()->forget('lang');
           Session()->put('lang', 'english');
           return Redirect()->back();
       }

       public function Turkish()
       {
           Session::get('lang');
           Session()->forget('lang');
           Session()->put('lang', 'turkish');
           return Redirect()->back();
       }
   */

//    public function Categories()
//    {
//        $data = Category::latest()->get();
//        $websetting =WebsiteSetting::first();
//
////        View::composer('main.body.header', function ($view) {
////            //
////            $view->with('websetting');
////        });
//        return view('main.body.header',compact('data','websetting'));
//
//    }

    public function Home()
    {


        $sondakika = Cache()->remember("headline", Carbon::now()->addYear(), function () {
            if (Cache::has('headline')) return Cache::has('headline');
            return Post::where('posts.headline', 1)
                ->where('created_at', '>', Carbon::now()->subDay(1))
                ->where('status', 1)
                ->limit(5)
                ->get();
        });

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => 'https://finans.truncgil.com/today.json',
            CURLOPT_RETURNTRANSFER => true,
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false),

        ]);
        $output = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($output, true);

        function degistir($string)
        {
            $string = str_replace('%', '', $string);

            return $string;
        }

        $kurlar = [
            'DOLAR' => [
                'oran' => $result['USD']['Değişim'],
                'oranyonu' => str_replace(',', '.', degistir($result['USD']['Değişim'])),
//                    'alis' => $usd['Buy'],
                'satis' => str_replace(',', '.', $result['USD']['Satış'])

            ],
            'EURO' => [
                'oran' => $result['EUR']['Değişim'],
                'oranyonu' => str_replace(',', '.', degistir($result['EUR']['Değişim'])),
//                    'alis' => $usd['Buy'],
                'satis' => str_replace(',', '.', degistir($result['EUR']['Satış']))
            ],
            'ALTIN' => [
                'oran' => $result['gram-altin']['Değişim'],
                'oranyonu' => $result['gram-altin']['Değişim'],
//                    'alis' => $usd['Buy'],
                'satis' => str_replace(',', '.', degistir($result['gram-altin']['Satış']))

            ],
            'ceyrekaltin' => [
                'oran' => $result['ceyrek-altin']['Değişim'],
                'oranyonu' => $result['ceyrek-altin']['Değişim'],
//                    'alis' => $usd['Buy'],
                'satis' => str_replace(',', '.', degistir($result['ceyrek-altin']['Satış']))
            ]
        ];


        $date = Carbon::now()->format('d.m.Y');

        $vakit = Vakitler::where('date', $date)->get();
        $vakitler = array(
            "imsak" => $vakit[0]['imsak'],
            "gunes" => $vakit[0]['gunes'],
            "ogle" => $vakit[0]['ogle'],
            "ikindi" => $vakit[0]['ikindi'],
            "aksam" => $vakit[0]['aksam'],
            "yatsi" => $vakit[0]['yatsi'],
        );
        Session::put('vakitler', $vakitler);
//dd($kurlar);
        Session::put('kurlar', $kurlar);

        $video_gallary = Cache()->remember("video_gallary", Carbon::now()->addYear(), function () {
            if (Cache::has('video_gallary')) return Cache::has('video_gallary');
            return Post::where('posts_video', '!=', NULL)->orderByDesc('created_at')->get();
        });
//        $home =
////            Cache::remember("home", Carbon::now()->addYear(), function () {
////            if (Cache::has('home')) return Cache::has('home');
//            Post::leftjoin('categories', 'posts.category_id', '=', 'categories.id')
//                ->leftjoin('subcategories', 'posts.subcategory_id', '=', 'subcategories.id')
//                ->leftjoin('districts', 'posts.district_id', '=', 'districts.id')
//                ->leftjoin('subdistricts', 'posts.subdistrict_id', 'subdistricts.id')
//                ->select(['posts.*', 'categories.category_tr', 'districts.district_tr', 'subdistricts.subdistrict_tr'])
//                ->where('status', 1)->latest('created_at')
//                ->get();
////            });

        $home = Cache()->remember("home", Carbon::now()->addYear(), function () {
            if (Cache::has('home')) return Cache::has('home');
            return Post::where('status', 1)->whereManset(1)
                ->latest('created_at')->limit(25)
                ->get();
        });

//        $surmanset =
////            Cache::remember("surmanset", Carbon::now()->addYear(), function () {
////            if (Cache::has('surmanset')) return Cache::has('surmanset');
//            Post::leftjoin('categories', 'posts.category_id', '=', 'categories.id')
//                ->leftjoin('subcategories', 'posts.subcategory_id', '=', 'subcategories.id')
//                ->leftjoin('districts', 'posts.district_id', '=', 'districts.id')
//                ->leftjoin('subdistricts', 'posts.subdistrict_id', 'subdistricts.id')
//                ->select(['posts.*', 'categories.category_tr', 'districts.district_tr', 'subdistricts.subdistrict_tr'])
//                ->where('status', 1)->latest('created_at')->limit(4)
//                ->get();
////            });
//cache()->forget('home-surmanset');
        $surmanset = Cache()->remember("home-surmanset", Carbon::now()->addYear(), function () {
//            if (Cache::has('surmanset')) return Cache::has('surmanset');
            return Post::where('status', 1)
                ->where('surmanset', 1)
                ->with('category')
                ->limit(4)
                ->latest('created_at')
                ->get();
        });

        $sagmanset = Cache()->remember("sagmanset", Carbon::now()->addYear(), function () {
            if (Cache::has('sagmanset')) return Cache::has('sagmanset'); //here am simply trying Laravel Collection method -find

            return Post::whereIn('category_id', [1, 2, 3])->where('status', 1)->latest('created_at')->limit(15)->get();
        });

        $sehir = Cache::remember("sehir", Carbon::now()->addYear(), function () {
            if (Cache::has('sehir')) return Cache::has('sehir');
            return Sehirler::orderByRaw('sehir_ad')->get();
        });
        $ilceler = Cache::remember("ilceler", Carbon::now()->addYear(), function () {
            if (Cache::has('ilceler')) return Cache::has('ilceler');
            //Buraya il seçtirerek ilçeler sıralanacak
            return Subdistrict::where('district_id', '=', '71')->orderByRaw('subdistrict_tr')->get();
        });
//        $category = Category::latest()->get();
//        dd($category->id);
//        foreach ($category as $cat) {
//            $economy = Post::get();
//        }
        $ucuncuSayfa = Cache::remember("ucuncuSayfa", Carbon::now()->addYear(), function () {
            if (Cache::has('ucuncuSayfa')) return Cache::has('ucuncuSayfa');
            return Post::where('category_id', 1)->where('status', 1)->where('featured', '=', 1)->limit(10)->latest('created_at')->get();

        });
        $ozel = Cache::remember("ozel", Carbon::now()->addYear(), function () {
            if (Cache::has('ozel')) return Cache::has('ozel');
            return Post::where('category_id', 1)->where('status', 1)->where('featured', '=', 1)->limit(10)->latest('created_at')->get();

        });

        $youtube = Cache::remember("youtube", Carbon::now()->addYear(), function () {
            if (Cache::has('youtube')) return Cache::has('youtube');
            return Post::where('category_id', 12)->where('status', 1)->limit(6)->latest('created_at')->get();

        });

        $videogaleri = Cache::remember("videogaleri", Carbon::now()->addYear(), function () {
            if (Cache::has('videogaleri')) return Cache::has('videogaleri');
            return Post::where('status', 1)->whereNotNull('posts_video')->limit(4)->latest('created_at')->get();

        });
        $videogaleriSlider = Cache::remember("videogaleriSlider", Carbon::now()->addYear(), function () {
            if (Cache::has('videogaleriSlider')) return Cache::has('videogaleriSlider');
            return Post::where('status', 1)->where('manset', 1)->whereNotNull('posts_video')->limit(12)->latest('created_at')->get();
        });
        $gundem = Cache::remember("gundem", Carbon::now()->addYear(), function () {
            if (Cache::has('gundem')) return Cache::has('gundem');
            return Post::where('category_id', '=', 2)->where('featured', '=', 1)->where('status', 1)->limit(10)->latest('created_at')->get();
        });
        $gundemcard = Cache::remember("gundemcard", Carbon::now()->addYear(), function () {
            if (Cache::has('gundemcard')) return Cache::has('gundem');
            return Post::where('category_id', '=', 2)->where('status', 1)->limit(3)->latest('created_at')->get();
        });
        $siyasetcard = Cache::remember("siyasetcard", Carbon::now()->addYear(), function () {
            if (Cache::has('siyasetcard')) return Cache::has('siyasetcard');
            return Post::where('category_id', '=', 3)->where('status', 1)->limit(3)->latest('created_at')->get();
        });
        $ekonomicard = Cache::remember("ekonomicard", Carbon::now()->addYear(), function () {
            if (Cache::has('ekonomicard')) return Cache::has('ekonomicard');
            return Post::where('category_id', '=', 5)->where('status', 1)->limit(3)->latest('created_at')->get();
        });

        $siyaset = Cache::remember("siyaset", Carbon::now()->addYear(), function () {
            if (Cache::has('siyaset')) return Cache::has('siyaset');
            return Post::where('category_id', '=', 3)->where('status', 1)->where('featured', '=', 1)->limit(10)->latest('created_at')->get();
        });

        $spor = Cache::remember("spor", Carbon::now()->addYear(), function () {
            if (Cache::has('spor')) return Cache::has('spor');
            return Post::where('category_id', '=', 6)->where('status', 1)->limit(10)->latest('created_at')->get();
        });
        $themeSetting = Cache::remember("themeSetting", Carbon::now()->addYear(), function () {
            if (Cache::has('themeSetting')) return Cache::has('themeSetting');
            return Theme::first();
        });



        $category1=$themeSetting->category1;
        $category2=$themeSetting->category2;
        $education  = Cache::remember("kultur", Carbon::now()->addYear(), function () use ($category1) {
            if (Cache::has('kultur')) return Cache::has('kultur');
            return Post::where('category_id', '=', $category1)->status()
                ->where('featured',1)
                ->limit(4)->latest('created_at')->get();
        });
         $kultur= Cache::remember("education", Carbon::now()->addYear(), function () use ($category2) {
            if (Cache::has('education')) return Cache::has('education');
            return Post::where('category_id', '=', $category2)->status()
                ->where('featured',1)
                ->limit(6)->latest('created_at')->get();
        });





        $Ilcehaberleri = Cache::remember("education", Carbon::now()->addYear(), function () {

            return Post::limit(8)->where('subdistrict_id', $ilce->id)->get();
        });

//        $authors = Cache::remember("authors", Carbon::now()->addYear(), function () {
//            if (Cache::has('authors')) return Cache::has('authors');
//        $authors = Authors::leftjoin('authors_posts', 'authors.id', '=', 'authors_posts.authors_id')
//            ->select(['authors.id','authors.name', 'authors_posts.*'])
//            ->where('authors.status', 1)->where('authors_posts.status', 1)->orderBy('authors_posts.created_at','ASC')
//            ->groupBy("authors.id")
//            ->get();
        $authors = Authors::leftjoin('authors_posts', 'authors.id', '=', 'authors_posts.authors_id')
            ->where('authors.status', 1)->where('authors_posts.status', 1)
            ->whereRaw('authors_posts.id in (select max(id) from authors_posts group by (authors_posts.authors_id))')
            ->latest("authors_posts.created_at")->limit(8)
            ->get();


//        dd($authors);

        $ads = Cache::remember("ads", Carbon::now()->addYear(), function () {
            if (Cache::has('ads')) return Cache::has('ads');
            return Ad::leftjoin('ad_categories', 'ads.category_id', '=', 'ad_categories.id')
//            ->join('ads','ad_categories.id','ads.category_id')
                ->select(['ads.*', 'ad_categories.id'])
                ->where('status', 1)
                ->get();

        });

        $seoset = Cache::remember("seoset", Carbon::now()->addYear(), function () {
            if (Cache::has('seoset')) return Cache::has('seoset');
            return Seos::first();
        });
        $havadurumu = Cache()->remember("home-havadurumu", Carbon::now()->addYear(), function () {

            $mgm = file_get_contents("https://www.mgm.gov.tr/FTPDATA/analiz/GunlukTahmin.xml");
            $veri = simplexml_load_string($mgm);
            $json = json_encode($veri);
            $array = json_decode($json, TRUE);
            $gelenil = "KIRIKKALE";
            $bul = $gelenil;
            $bulunacak = array('ç', 'Ç', 'ı', 'ğ', 'Ğ', 'ü', 'İ', 'ö', 'Ş', 'ş', 'Ö', 'Ü', ',', ' ', '(', ')', '[', ']');
            $degistir = array('c', 'C', 'i', 'g', 'G', 'u', 'I', 'o', 'S', 's', 'O', 'U', '', '_', '', '', '', '');
            $sonuc = str_replace($bulunacak, $degistir, $bul);
            $sonuc;

            function cevir($string)
            {

                $string = str_replace("SCK", "Sıcak", $string);
                $string = str_replace("AB", "Az Bulutlu", $string);
                $string = str_replace("HSY", "Hafif Sağnak Yağış", $string);
                $string = str_replace("PB", "Parçalı Bulutlu", $string);
                $string = str_replace("GSY", "Gökgürltülü Sağnak Yağışlı", $string);
                $string = str_replace("KGY", "Kuvvetli Gökgürltülü Sağnak Yağışlı", $string);
                $string = str_replace("MSY", "Mevzi Sağnak Yağışlı", $string);

                return $string;
            }


            foreach ($array['Merkez'] as $data) {
                if ($data['ilEn'] == $sonuc) {
                    if ($data['d1'] == "GSY") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-night-thunderstorm"></i>';
                    } elseif ($data['d1'] == "SCK") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-day-sunny"></i>';
                    } elseif ($data['d1'] == "KGY") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-night-thunderstorm"></i>';
                    } elseif ($data['d1'] == "AB") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-night-partly-cloudy"></i>';
                    } elseif ($data['d1'] == "PB") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-day-cloudy-windy"></i>';
                    } elseif ($data['d1'] == "HSY") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-day-rain"></i>';
                    } elseif ($data['d1'] == "MSY") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-day-showers"></i>';
                    } elseif ($data['d1'] == "A") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-day-sunny"></i>';
                    } elseif ($data['d1'] == "CB") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-cloudy"></i>';
                    } elseif ($data['d1'] == "SIS") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-fog"></i>';
                    } elseif ($data['d1'] == "Y") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-storm-showers"></i>';
                    }elseif ($data['d1'] == "YKY") {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-day-rain-mix"></i>';
                    } else {
                        $icon = '<i  style="font-size: 20px;" class="wi wi-celsius"></i>';
                    }


                    $day1 = $data['makk1'];


                }
            }

            $veri = array(
                'gelenil' => $gelenil,
                'sicaklik' => $day1,
//            'icon' =>$icon,
            );
            Session::put('icon', $icon);
            Session::put('gelenil', $gelenil);
            Session::put('havadurumu', $veri['sicaklik']);
        });
        $webSiteSetting = Cache()->remember("home-websitesetting", Carbon::now()->addYear(), function () {

            return WebsiteSetting::first();
        });
        $category = Cache()->remember("home-category", Carbon::now()->addYear(), function () {
            return category::where('category_status',1)->where('category_menu',1)->limit(11)->orderBy('category_order')->get();

        });
$egazete= Cache()->remember("home-egazete", Carbon::now()->addYear(), function () {
    return Gazetesayis::latest()->where('status',1)->limit(9)->get();
});

        return view('main.home', compact('home', 'ucuncuSayfa','egazete', 'gundemcard', 'siyasetcard', 'ekonomicard', 'youtube', 'videogaleri', 'videogaleriSlider', 'surmanset', 'ozel', 'gundem', 'spor', 'siyaset', 'sagmanset', 'themeSetting', 'sondakika', 'sehir', 'ilceler', 'authors', 'ads', 'seoset', 'video_gallary', 'havadurumu', 'webSiteSetting', 'education', 'kultur', 'category', 'Ilcehaberleri'));
//        return view('main.home_master', compact('seoset'))
//        return view('main.body.header', compact('vakitler'));

    }


    public function SinglePost($slug, $id)
    {
//dd($id);

        $r = $_SERVER['REQUEST_URI'];
        $r = explode('?', $r);
        $r = array_filter($r);
        $r = array_merge($r, array());
        $ids = $r;
        $explodeID = explode('-', $ids[0]);
        $id = $explodeID[count($explodeID) - 1];
//dd($id);
//        dd($explodeID[count($explodeID)-1 ]);

//             $post= Post::where('status', 1)->find($explodeID[count($explodeID) - 1]);
//        if (!Cache::has('single-post'))
//        {
//            $post=Post::where('status', 1)->find($id);
//            Cache::put('single-post', $post, Carbon::now()->addYear());
//        } else{
//            $post = Cache::get('single-post');
//        }
        $post = Post::where('status', 1)->find($id);


//        dd($post);
//        $maybeRelated=[];
//        if (!Cache::has('single-comments'))
//        {
//            $comments= Comments::where('posts_id', $id)->where('status', 1)->get();
////            dd($comments);
//            Cache::put('single-comments', $comments, Carbon::now()->addYear());
//        } else{
//            $comments = Cache::get('single-comments');
//        }
        $comments = Comments::where('posts_id', $id)->where('status', 1)->get();

        $orderImages = OrderImages::where('haberId', $id)->get();
        $slider = Cache()->remember("single-slider", Carbon::now()->addYear(), function () {
            return Post::latest('created_at')->status()
                ->with('category')
                ->limit(6)
                ->get();
        });


//        $category = Category::where('id', '=', $post->category_id)->get();
        $ads = Cache()->remember("single-ads", Carbon::now()->addYear(), function () {
            return Ad::latest('created_at')
                ->where('status', 1)
                ->with('adcategory')
                ->get();
        });

//        $related =
//            Post::leftjoin('post_tags', 'posts.id', 'post_tags.post_id')
//                ->leftjoin('tags', 'post_tags.tag_id', 'tags.id')
//                ->select(['posts.*', 'post_tags.post_id', 'tags.id', 'tags.name'])
//                ->where('posts.id', $id)->where('posts.status',1)->latest()
//                ->limit(1)
//                ->get();
//        $related =Post::with(['PostTag:post_id'])->where('id', $id)->where('status', 1)->latest('updated_at')->limit(10)->get();

//        $related = Post::leftjoin('post_tags', 'posts.id', 'post_tags.post_id')
//                ->leftjoin('tags', 'post_tags.tag_id', 'tags.id')
//                ->select(['posts.*', 'post_tags.post_id', 'tags.id', 'tags.name'])
//                ->where('posts.id', $id)->where('posts.status',1)->latest()
//                ->limit(10)
//                ->get();
//            $random = Cache()->remember("single-random", Carbon::now()->addYear(), function () {
//             return Post::inRandomOrder()->limit(3)->get();
//        });

//        $tag_ids = $post->tag()->get();
//        $tagCount = $tag_ids->count();

//        $tagName =
//            Post::leftjoin('post_tags', 'posts.id', 'post_tags.post_id')
//                ->leftjoin('tags', 'post_tags.tag_id', 'tags.id')
//                ->select(['posts.*', 'post_tags.post_id', 'tags.id', 'tags.name'])
//                ->where('posts.id', $id)->where('posts.status', 1)
//                ->limit(10)
//                ->get();
//        if($post->category_id!=NULL) {

        $nextrelated = Post::where('category_id', $post->category_id)->status()->whereDate('created_at', '>', \Carbon\Carbon::parse()->now()->subMonth())->limit(10)->inRandomOrder()
            ->get();
//            $nextrelated = Post::limit(10)->inRandomOrder()->latest()
//                ->get();
//        }
//        dd($nextrelated);
        $seoset = Cache()->remember("single-seoset", Carbon::now()->addYear(), function () {
            return Seos::first();
        });
        if (!empty($post->tag())) {

            $tag_ids = $post->tag()->get();
//        dd($post->tag());


            $tagCount = $tag_ids->count();
            $ids = array();
            foreach ($tag_ids as $tags) {
                $ids[] = $tags->id;
                $tag = $tags->id;
            }
//        dd($ids);
            $maybeRelated = [];
            if (isset($ids)) {
                if ($ids != []) {
                    $maybeRelated = Post::leftjoin('post_tags', 'posts.id', 'post_tags.post_id')
                        ->leftjoin('tags', 'post_tags.tag_id', 'tags.id')
                        ->select(['posts.*', 'post_tags.post_id', 'tags.id', 'tags.name'])
                        ->orWhereIn('post_tags.tag_id', $ids)->skip(1)->limit(3)->inRandomOrder()->groupBy('posts.id')->where('posts.status', 1)->latest()
                        ->get();
                }
            }
        }
        return view('main.body.single_post', compact('post', 'ads', 'orderImages', 'maybeRelated', 'seoset', 'slider', 'nextrelated', 'comments', 'tagCount'));


    }

    //Fixed Page Open
    public function Sayfa($id)
    {
        $fixedPage = DB::table('fixedpage')->where('id', '=', $id)->get();

        return view('main.body.fixedpage', compact('fixedPage'));
    }


    public function CategoryPost($slug,$name, $id)
    {

        $category = Category::latest()->where('id', $id)->orderBy('id', 'desc')->first();
        $authors = Cache::remember("authors", Carbon::now()->addYear(), function () {
            if (Cache::has('authors')) return Cache::has('authors');
            return Authors::leftjoin('authors_posts', 'authors.id', '=', 'authors_posts.authors_id')
                ->select(['authors.*', 'authors_posts.title'])
                ->latest('created_at')->where('authors.status', 1)->where('authors_posts.status', 1)
                ->groupBy("authors.id")->latest("authors_posts.id")
                ->get();
        });
        $manset =
            Post::join('categories', 'posts.category_id', 'categories.id')
                ->select('posts.*', 'categories.category_tr', 'categories.category_en')
                ->where('posts.status', 1)
                ->where('posts.category_id', $id)->where('posts.manset', 1)
                ->orderBy('created_at', 'desc')
                ->limit(15)->get();


        $count = Post::join('categories', 'posts.category_id', 'categories.id')
            ->select('posts.*', 'categories.category_tr', 'categories.category_en')
            ->where('posts.status', 1)
            ->where('posts.category_id', $id)
            ->count();


        $catpost = Post::join('categories', 'posts.category_id', 'categories.id')
            ->select('posts.*', 'categories.category_tr', 'categories.category_en')->where('posts.status', 1)
            ->where('posts.category_id', $id)->orWhere('posts.manset', NULL)->orderBy('created_at', 'desc')->offset(1)
            ->paginate(20);


        $nextnews = Post::join('categories', 'posts.category_id', 'categories.id')
            ->select('posts.*', 'categories.category_tr', 'categories.category_en')
            ->where('posts.category_id', $id)->where('posts.status', 1)->whereDate('posts.created_at', '>', \Carbon\Carbon::parse()->now()->subYear())
            ->inRandomOrder()->limit(10)
            ->get();
        $ads =

            Ad::latest('created_at')
                ->where('status', 1)
                ->with('adcategory')
                ->get();

        return view('main.body.category_post', compact('manset', 'authors', 'category', 'ads', 'catpost', 'nextnews', 'count'));


    }

    public function VideoGaleriAll()
    {
        $manset =
            Post::where('manset', 1)->where('posts_video', '!=', "")->where('status', 1)
                ->orderBy('created_at', 'desc')
                ->limit(15)->get();

        $count = Post::where('posts_video', '!=', "")->where('status', 1)
            ->count();


        $catpost = Post::where('posts_video', '!=', "")->orWhere('manset', NULL)->orderBy('created_at', 'desc')->where('status', 1)->offset(1)
            ->paginate(20);


        $nextnews = Post::where('posts_video', '!=', "")->where('status', 1)->whereDate('created_at', '>', \Carbon\Carbon::parse()->now()->subYear())
            ->inRandomOrder()->limit(10)
            ->get();
        $ads =
            Ad::latest('created_at')
                ->where('status', 1)
                ->with('adcategory')
                ->get();

        return view('main.body.video_galeri', compact('manset',   'ads', 'catpost', 'nextnews', 'count'));


    }

    public function search(Request $request)
    {
        $searchText = $request['searchtext'];
        $json = Post::Where('status', 1)->Where('title_tr', 'LIKE', '%' . $searchText . '%')->latest()->get();
        $searchNews = $this->change($json);
        return \view('main.body.search', compact('searchNews'));
    }


    function change($json)
    {
        $json = json_decode(str_replace("&ccedil;", 'ç', json_encode($json)));
        $json = json_decode(str_replace("&ccedil;", 'ç', json_encode($json)));
        $json = json_decode(str_replace("&yacute;", "ı", json_encode($json)));
        $json = json_decode(str_replace("&Ccedil;", "Ç", json_encode($json)));
        $json = json_decode(str_replace("&Ouml;", "Ö", json_encode($json)));
        $json = json_decode(str_replace("&Yacute;", "Ü", json_encode($json)));
        $json = json_decode(str_replace("&ETH;", "Ğ", json_encode($json)));
        $json = json_decode(str_replace("&THORN;", "Ş", json_encode($json)));
        $json = json_decode(str_replace("&Yacute;", "İ", json_encode($json)));
        $json = json_decode(str_replace("&ouml;", "ö", json_encode($json)));
        $json = json_decode(str_replace("&thorn;", "ş", json_encode($json)));
        $json = json_decode(str_replace("&eth;", "ğ", json_encode($json)));
        $json = json_decode(str_replace("&uuml;", "ü", json_encode($json)));
        $json = json_decode(str_replace("&Uuml;", "Ü", json_encode($json)));
        $json = json_decode(str_replace("&rsquo;", "’", json_encode($json)));
        $json = json_decode(str_replace("&yacute;", "ı", json_encode($json)));
        $json = json_decode(str_replace("&amp;", "&", json_encode($json)));
        $json = json_decode(str_replace("&nbsp;", "", json_encode($json)));
        $json = json_decode(str_replace("&ldquo;", "“", json_encode($json)));
        $json = json_decode(str_replace("&rdquo;", "”", json_encode($json)));
        $json = json_decode(str_replace("&#65279", "", json_encode($json)));
        $json = json_decode(str_replace("&#39;", "'", json_encode($json)));
        $json = json_decode(str_replace("&quot;", "“", json_encode($json)));
        return $json;
    }

    public function TumKategoriler()
    {
        $allcategories = Cache::remember("allcategories", Carbon::now()->addYear(), function () {
            if (Cache::has('allcategories')) return Cache::has('allcategories');
            return Category::get();
        });
        return view('main.body.allcategories', compact('allcategories'));
    }


    public function yazilar($slug,$id)
    {
//        dd($id); // yazının ID'si

        $sluf=$slug;
        $seoset = Seos::first();
        $yazi = AuthorsPost::where('id', '=', $id)->limit(10)->orderByDesc('id')->get();
//        $authorsId=$yazi[0]->authors_id;
//        dd($yazi);
        $yazar = Authors::where('id', '=', $id)->get();
//        dd($yazi);
//        $nextauthors_posts = Cache()->remember("home-nextauthors_posts", Carbon::now()->addYear(), function () {
        $nextauthors_posts = AuthorsPost::whereStatus(1)->where('authors_id', isset($yazi[0]) ? $yazi[0]->authors_id : '')->skip(0)->take(10)->latest()->get();
//        });
//        dd($nextauthors_posts);

        $otherauthos=  AuthorsPost::leftjoin('authors', 'authors_posts.authors_id', '=', 'authors.id')
            ->select(['authors_posts.*','authors.name'])
            ->latest()->where('authors.status', 1)->where('authors_posts.status', 1)
            ->groupBy("authors.id")->latest("authors_posts.id")
            ->get();
//        dd($otherauthos);

        $webSiteSetting = Cache()->remember("home-websitesetting", Carbon::now()->addYear(), function () {
            return WebsiteSetting::first();
        });
        return view('main.body.authors_writes', compact('yazi', 'yazar', 'nextauthors_posts', 'webSiteSetting','otherauthos'));
    }

    public function yazilars($slug,$id)

    {

        $seoset = Seos::first();
        $yazi = AuthorsPost::where('id', '=', $id)->limit(10)->get();
        $nextauthors_posts = DB::table('authors_posts')
            ->latest('created_at')->where('status', 1)->where('id', '=', $id)->limit(10)
            ->get();
        $yazar = Authors::where('id', '=', $id)->get();

        return view('main.body.authors_writes', compact('yazi', 'yazar', 'nextauthors_posts'));
    }

    public function breakingnews()
    {
        $webSiteSetting = Cache()->remember("home-websitesetting", Carbon::now()->addYear(), function () {

            return WebsiteSetting::first();
        });
        $themeSetting = Cache()->remember("home-themeSettings", Carbon::now()->addYear(), function () {

            return Theme::get();
        });

        $sondakika = Post::where('created_at', '>', Carbon::now()->subHour(24))->latest()->get();

        return view('main.body.breakingnews', compact('sondakika', 'webSiteSetting', 'themeSetting'));
    }






//    public function akbankkur()
//    {
//        $ch = curl_init();
//        curl_setopt_array($ch, [
//            CURLOPT_URL => 'https://www.akbank.com/_vti_bin/AkbankServicesSecure/FrontEndServiceSecure.svc/GetExchangeData?_=' . time(),
//            CURLOPT_RETURNTRANSFER => true,
//            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false),
//
//        ]);
//        $output = curl_exec($ch);
//        curl_close($ch);
//
//
//        $output = json_decode($output, true);
//        $results = json_decode($output['GetExchangeDataResult'], true);
//
//// print_r($results);
//        $usd = $results['Currencies'][16];
//        $euro = $results['Currencies'][6];
//        $altin = $results['Currencies'][17];
//        $imkb = $results['BIST'];
//
//        $kurlar= [
//            'DOLAR' => [
//                'oran' => $usd['Rate'],
//                'oranyonu' => $usd['RateDiretion'],
//                'alis' => $usd['Buy'],
//                'satis' => str_replace (',', '.' ,$usd['Sell'])
//
//            ],
//            'EURO' => [
//                'oran' => $euro['Rate'],
//                'oranyonu' => $euro['RateDiretion'],
//                'alis' => $euro['Buy'],
//                'satis' => str_replace (',', '.' ,$euro['Sell'])
//
//            ],
//            'ALTIN' => [
//                'oran' => $altin['Rate'],
//                'oranyonu' => $altin['RateDiretion'],
//                'alis' => $altin['Buy'],
//                'satis' => str_replace (',', '.' ,$altin['Sell'])
//
//            ],
//            'imkb' => [
//                'oran' => $imkb['Rate'],
//                'oranyonu' => $imkb['RateDirection'],
//                'deger' => str_replace (',', '.' ,$imkb['Index'])
//            ]
//        ];
//
//        return view('main.home',compact('kurlar'));
//    }


}


