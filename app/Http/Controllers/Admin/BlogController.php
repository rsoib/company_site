<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Auth;

class BlogController extends AdminController
{
    
    public function __construct()
    {

        $this->template = 'admin.blog.articles_view';
    }


    public function index()
    {
        $this->title = 'Блог';

        $articles = $this->getArticles(); 

        

        $this->content = view('admin.blog.articles_content')->with('articles',$articles);
        $this->vars = array_add($this->vars,'content',$this->content);

        return $this->renderOutput();
    }

    public function getArticles()
    {
        $articles = Blog::orderBy('id','desc')->get();
        return $articles;

    }
    

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
