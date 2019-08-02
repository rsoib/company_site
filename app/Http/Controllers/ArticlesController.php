<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use Config;

class ArticlesController extends SiteController
{
    
    public function __construct()
    {
        $this->template = 'articles.articles_view';
    }



    public function index($cat_alias = FALSE)
    {
       // $this->vars = array();
        $this->title = 'Блог';

        // get Articles
        $articles = $this->getArticles($cat_alias);

        // get categoties

        $categories = $this->getCategories();

        // get popular articles

        $popularArticles = $this->getPopularArticles();

        // rightbar

        $this->contentRightBar = view('articles.rightBar')->with(['articles'=>$articles,
                                                                  'categories'=>$categories,
                                                                  'popularArticles'=>$popularArticles
                                                                ])->render();

        

        $this->content = view('articles.articles_content')->with('articles',$articles)->render();
        $this->vars = array_add($this->vars,'content',$this->content);

        return $this->renderOutput();
    }


    public function getArticles($cat_alias = FALSE)
    {
        $where = FALSE;
        //Получим статьи по Категориям
        if ($cat_alias) {
            
            $id = Category::select('id')->where('cat_alias',$cat_alias)->first()->id;
            $where = ['category_id',$id];

        }
        
        if ($where) {
            
            $articles = Blog::where($where[0],$where[1])->paginate(Config::get('settings.paginate'));
        }else{
            $articles = Blog::paginate(Config::get('settings.paginate'));
        }
        
        //
        return $articles;
    }

    public function getCategories()
    {
        $categories = Category::all();
        return $categories;
    }

    public function getPopularArticles()
    {
        $popularArticles = Blog::where('popular',1)->limit(Config::get('settings.recent_popular_articles'))->orderBy('id','desc')->get();
        return $popularArticles;
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
    public function show($alias)
    {

        $article = Blog::where('alias',$alias)->first();
        
        

        $this->title = $article->title;

         // get categoties

        $categories = $this->getCategories();

        // get popular articles

        $popularArticles = $this->getPopularArticles();

        // rightbar

        $this->contentRightBar = view('articles.rightBar')->with(['categories'=>$categories,
                                                                  'popularArticles'=>$popularArticles
                                                                ])->render();

        
        $this->content = view('articles.article_show')->with('article',$article)->render();

        $this->vars = array_add($this->vars,'content',$this->content);

        return $this->renderOutput();
       



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
