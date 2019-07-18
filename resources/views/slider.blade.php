@if($slider)
<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach($slider as $item)
                <div class="item {{ ($item->id == 17) ? 'active' : '' }}" style="background-image: url(assets/images/slider/{{ $item->images }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">{{ $item->title }}</h1>
                                    <div class="animation animated-item-2">
                                       {{ $item->text }}
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="{{ route('articles.show',['article'=>$item->id]) }}">Learn More</a>
                                    <!-- <a class="btn-slide white animation animated-item-3" href="#">Get Started</a> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                <!--/.item-->               
            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->
@endif

<!-- // End Slider -->
