<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = "Welcome to my page!";
        $diaries = Diary::all();   // データベースのdiariesから全てのデータを取得する
        // return view("index");  // indexファイルを呼び出す
        return view("index", ["message" => $message, "diaries" => $diaries]); // 変数$messageと$diariesをビューに渡すようにする
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $diary = new Diary();
        
        $diary->topic = "It is a sunny day today.";
        $diary->weather = "sunny";
        $diary->save();

        return redirect('/diary');
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
     * @param  \App\Diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, Diary $diary)
    {
        $message = "This is your diary " .$id;
        $diary = Diary::find($id);
        return view("show", ["message" => $message, "diary" => $diary]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function edit(Diary $diary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diary $diary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id, Diary $diary)
    {
        $diary = Diary::find($id); 
        $article->delete();
        return redirect('/diary');
    }
}
