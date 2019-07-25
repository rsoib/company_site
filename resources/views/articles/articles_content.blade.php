<div class="page-title" style="background-image: url(assets/images/page-title.png)">
    <h1>Blog</h1>
</div>
@if($articles)
<section id="blog">
        <div class="blog container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($articles as $article)
                    <div class="blog-item">
                        <a href="#"><img class="img-responsive img-blog" src="assets/images/{{ $article->images }}" width="100%" alt="" /></a>
                        <div class="blog-content">
                            <a href="#" class="blog_cat">{{ $article->category->name }}</a>
                            <h2><a href="blog-item.html">{{ $article->title }}</a></h2>
                            <h3>{{ str_limit($article->text,370) }}</h3>
                            <a class="readmore btn btn-default" href="{{ route('articles.show',['alias'=>$article->alias]) }}">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                	<!--/.blog-item-->
                    
                </div>
                <!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--/.search-->
                    

                    <div class="widget archieve">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                    <li><a href="#">December 2013 <span class="pull-right">(97)</span></a></li>
                                    <li><a href="#">November 2013 <span class="pull-right">(32)</span></a></li>
                                    <li><a href="#">October 2013 <span class="pull-right">(19)</span></a></li>
                                    <li><a href="#">September 2013 <span class="pull-right">(08)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/.archieve-->

                    <div class="widget popular_post">
                        <h3>Popular Post</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="assets/images/post1.png" alt="">
                                    <p>Can you get free games for you</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/post2.png" alt="">
                                    <p>Can you get free games for you</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/post3.png" alt="">
                                    <p>Can you get free games for you</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/.archieve-->
                    

                    <div class="widget blog_gallery">
                        <h3>Our Gallery</h3>
                        <ul class="sidebar-gallery clearfix">
                            <li>
                                <a href="#"><img src="assets/images/sidebar-g-1.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/sidebar-g-2.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/sidebar-g-3.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/sidebar-g-4.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/sidebar-g-5.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/sidebar-g-6.png" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                    <!--/.blog_gallery-->
                    
                    <div class="widget social_icon">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        <a href="#" class="fa fa-github"></a>
                    </div>
                    
                </aside>
            </div>
            <!--/.row-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                    </ul>
                    <!--/.pagination-->
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
@endif