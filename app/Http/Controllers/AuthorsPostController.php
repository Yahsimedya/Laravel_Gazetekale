<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Models\AuthorsPost;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AuthorsPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }public function all()
{
//    $otherauthos= Cache::remember("otherauthos", Carbon::now()->addYear(), function () {
//        if (Cache::has('otherauthos')) return Cache::has('otherauthos');
//        return Authors::leftjoin('authors_posts', 'authors.id','=', 'authors_posts.authors_id')
//            ->select(['authors.*', 'authors_posts.title'])
//            ->latest('updated_at')->where('authors.status', 1)->where('authors_posts.status', 1)
//            ->groupBy("authors.id")->latest("authors_posts.id")
//            ->get();
//    });
    $authors=  AuthorsPost::leftjoin('authors', 'authors_posts.authors_id', '=', 'authors.id')
        ->select(['authors_posts.*','authors.name'])
        ->latest()->where('authors.status', 1)->where('authors_posts.status', 1)
        ->groupBy("authors.id")->latest("authors_posts.id")
        ->get();
    return view('main.body.authors',compact('authors'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthorsPost  $authorsPost
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorsPost $authorsPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthorsPost  $authorsPost
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorsPost $authorsPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthorsPost  $authorsPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorsPost $authorsPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorsPost  $authorsPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorsPost $authorsPost)
    {
        //
    }
}
