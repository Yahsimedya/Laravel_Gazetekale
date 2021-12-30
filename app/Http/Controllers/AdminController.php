<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use App\Models\AuthorsPost;
use Illuminate\Database\Eloquent\Builder;

use CyrildeWit\EloquentViewable\Support\Period;

class AdminController extends Controller
{
    public function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Çıkış Yapıldı');
    }

    public function index()
    {
        $news = DB::table('posts')->get('id');
        $endNews = Post::limit(10)->orderByViews('desc')->get();
        $endComments = DB::table('comments')->limit(10)->latest('id')->get();
        $endAuthors_posts = AuthorsPost::leftjoin('authors', 'authors.id', '=', 'authors_posts.authors_id')
            ->select(['authors_posts.*', 'authors.name'])
            ->orderByViews('desc')
            ->paginate(10);
        $newsCount = count($news);
        $comments = DB::table('comments')->get('id');
        $commentsCount = $comments->count();
        $i = 0;
        $count = views(Post::class)->period(Period::subHours(24))->remember()->count();
        $countwrites = views(AuthorsPost::class)->period(Period::subHours(24))->remember()->count();
        $countTekil = views(Post::class)->period(Period::subHours(24))->unique()->remember()->count();
        $days = Carbon::today();
        $authors_posts = DB::table('authors_posts')->get('id');

        $authors_postsCount = $authors_posts->count();
        return view('admin.index', compact('newsCount', 'commentsCount', 'endNews', 'endComments', 'endAuthors_posts', 'authors_postsCount', 'countTekil', 'countwrites', 'count'));

    }
}
