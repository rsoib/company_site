@if($portfolios)
<div class="page-title" style="background-image: url(assets/images/page-title.png)">
        <h1>{{ Lang::get('ru.portfolio') }}</h1>
    </div>
    
    <section id="portfolio">
        <div class="container">
            <div class="center">
                <h2>{{ Lang::get('ru.recent_works') }}</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>


            <ul class="portfolio-filter text-center">
                @foreach($filters as $filter)
                    <li><a class="btn btn-default {{ ($filter->id == 1) ? 'active' : ''  }}" href="#" data-filter="{{ ($filter->id == 1) ? '*' : '.'.$filter->name  }}">{{ $filter->name }}</a></li>
                @endforeach
            </ul>
            <!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    
                    @foreach($portfolios as $portfolio)
                    <div class="portfolio-item {{ $portfolio->filter->name }} col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="assets/images/{{ $portfolio->images }}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="assets/images/{{ $portfolio->images }}" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--/.portfolio-item-->

                    
                    <!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-item-->
@endif