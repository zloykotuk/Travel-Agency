<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog', ['articles' => Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request->file('image_url'));

      $this->validate($request, [
        'title' => 'required|max:255|string',
        'image_url' => 'required|image',
        'body' => 'required|string'
      ]);

      if($file = $request->file('image_url')){
        $name = time() . str_random(5) . $file->getClientOriginalName();
        if($file->move('images', $name)){
          $acticle = new Article();
          $acticle->title = $request->input('title');
          $acticle->image_url = '/images/'. $name;
          $acticle->body = $request->input('body');
          $acticle->user_id = Auth::id();
          $acticle->save();
          return redirect('/blog');
        }
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('blog_single', ['article' => Article::find($id)]);
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
