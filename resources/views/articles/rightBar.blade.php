            <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--/.search-->
                    

                    <div class="widget archieve">
                        <h3>{{ Lang::get('ru.categories') }}</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                    
                                    @foreach($categories as $category)
                                    @if(count($category->blogs) != 0)
                                         <li>
                                            <a href="{{ route('articlesCat',['cat_alias'=>$category->cat_alias]) }}">
                                                {{ $category->name }}
                                                <span class="pull-right">({{ count($category->blogs) }})</span>
                                            </a>
                                        </li>
                                    @endif
                                    @endforeach()
                                    
                                   
                                   <!--  <li><a href="#">November 2013 <span class="pull-right">(32)</span></a></li>
                                   <li><a href="#">October 2013 <span class="pull-right">(19)</span></a></li>
                                   <li><a href="#">September 2013 <span class="pull-right">(08)</span></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/.archieve-->
                
                    <div class="widget popular_post">
                        <h3>{{ Lang::get('ru.popular_posts') }}</h3>
                        <ul>
                            @foreach($popularArticles as $item)
                            <li>
                                <a href="#">
                                    <img src='{{ asset("assets/images/$item->images") }}' alt="">
                                    <p>{{ $item->title }}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--/.archieve-->
                    

                    <div class="widget blog_gallery">
                        <h3>{{ Lang::get('ru.our_gallery') }}</h3>
                        <ul class="sidebar-gallery clearfix">
                            <li>
                                <a href="#"><img src="{{ asset('assets/images/sidebar-g-1.png') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assets/images/sidebar-g-2.png') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assets/images/sidebar-g-3.png') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assets/images/sidebar-g-4.png') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assets/images/sidebar-g-5.png') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assets/images/sidebar-g-6.png') }}" alt="" /></a>
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
                <div class="col-md-12 text-center">
                     @if(isset($articles))
                        <div class="col-md-12 text-center">
                     {{  $articles->links() }}
                </div>
                     @endif
                </div>
      </div>
        </div>
    </section>
    <!--/#blog-->