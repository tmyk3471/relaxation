<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Therapist;    // 追加
//use App\Article;    // 追加　※ニュース一覧設置の際に実装

class ToppageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    // getで/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
//      $therapists = Therapist::all();
        $therapists = Therapist::orderBy('id', 'desc')->paginate(20);
//      $articles = Article::all();
//      $articles = Article::orderBy('id', 'desc')->paginate(20);
        
        return view('welcome', [
            'therapists' => $therapists,
//          'articles' => $articles,
        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
