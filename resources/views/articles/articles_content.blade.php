<div class="page-title" style="background-image: url({{ asset('assets/images/page-title.png') }})">
    <h1>{{ Lang::get('ru.blog') }}</h1>
</div>
@if($articles)
<section id="blog">
        <div class="blog container">
            <div class="row">
                
                <div class="col-md-8">
                    @foreach($articles as $article)
                    <div class="blog-item">
                        <a href="#"><img class="img-responsive img-blog" src='{{ asset("assets/images/$article->images") }}' width="100%" alt="" /></a>
                        <div class="blog-content">
                            <a href="#" class="blog_cat">{{ $article->category->name }}</a>
                            <h2><a href="{{ route('articles.show',['alias'=>$article->alias]) }}">{{ $article->title }}</a></h2>
                            <h3>{{ str_limit($article->text,370) }}</h3>
                            <a class="readmore btn btn-default" href="{{ route('articles.show',['alias'=>$article->alias]) }}">{{ Lang::get('ru.read_more') }} <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
             
                	<!--/.blog-item-->
                </div>
                <!--/.col-md-8-->

@endif