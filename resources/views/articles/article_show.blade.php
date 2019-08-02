@if($article)
<div class="page-title" style="background-image: url(/assets/images/page-title.png)">
        <h1>Single Blog</h1>
    </div>
    <section id="blog">

        <div class="blog container">
            <div class="row">
                <div class="col-md-8">

                    <div class="blog-item">
                        <a href="#"><img class="img-responsive img-blog" src="images/blog1.png" width="100%" alt="" /></a>
                        <div class="blog-content">
                            <a href="#" class="blog_cat">{{ $article->category->name }}</a>
                            <h2><a href="blog-item.html">{{ $article->title }}</a></h2>
                            <div class="post-meta">
                                <p>
                                    By |<a href="#">{{ $article->user->name }}</a>
                                </p>
                                
                                <p>
                                    <i class="fa fa-clock-o"></i> 
                                    <a href="#">
                                        {{ $article->created_at->format('d M Y') }}
                                    </a>
                                
                                <p>
                                    share:
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-linkedin"></a>
                                    <a href="#" class="fa fa-pinterest"></a>
                                </p>
                            </div>
                            <h3>{{ $article->text }}</h3>
                            
                            <div class="inner-meta">
                            
                                <div class="social-btns">
                                    <a href="#"> <i class="fa fa-heart"></i> Like</a>
                                    <a href="#" class="tweet-bg"> <i class="fa fa-twitter"></i> tweet</a>
                                    <a href="#" class="facebook-bg"> <i class="fa fa-facebook"></i> facebook</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--/.blog-item-->

                </div>
                <!--/.col-md-8-->
@endif