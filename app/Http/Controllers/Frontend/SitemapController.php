<?php

namespace App\Http\Controllers\Frontend;

use App;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\District;
use App\Models\Photo;
use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Support\Facades\URL;


class SitemapController extends Controller
{
    public function sitemap()
    {
        $sitemaphome = App::make('sitemap');//home
        $sitemapcategories = App::make('sitemap');//categories
        $sitemapdistricts = App::make('sitemap');//districts
        $sitemapimages = App::make('sitemap');//images
        $sitemapfotogaleri = App::make('sitemap');//fotogaleri
        $sitemapvideogaleri = App::make('sitemap');//videogaleri
        $posts = Post::orderByDesc('id')->orderByDesc('id')->get();
        $postsvideo = Post::where('posts_video', '!=', "")->orderByDesc('id')->get();
        $photos =Photo::orderByDesc('id')->get();
        $categories = Category::get();
        $districts = District::get();
        $counter = 0;
        $sitemapCounter = 0;
        $sitemapCounters = 0;
        $sitemapCounterAllPage = 0;
        $sitemapCounterImages = 0;
        $host = request()->getHost();





        $sitemaphome->addSitemap(URL::to("https://" . $host), Carbon::today());
        $sitemaphome->store('sitemapindex', 'sitemap');
        return redirect('/sitemap.xml');
    }
}
