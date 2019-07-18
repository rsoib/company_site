@if($portfolios)
 <section id="recent-works">
      <div class="container">
          <div class="center fadeInDown">
              <h2>{{ Lang::get('ru.recent_works') }}</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
          </div>

          <div class="row">    
             @foreach($portfolios as $portfolio)
				<div class="col-xs-12 col-sm-6 col-md-4 single-work">
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
           </div>
           <!--/.row-->
            <div class="clearfix text-center">
               <br>
               <br>
               <a href="{{ route('portfolios') }}" class="btn btn-primary">Show More</a>
            </div>
        </div>
        <!--/.container-->
 </section>
    <!--/#recent-works-->
@endif

<!-- Start Service -->
@if($services)
<section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>{{ Lang::get('ru.our_service') }}</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
			  @foreach($services as $service)
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="assets/images/{{ $service->icon }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->
@endif

<!-- End Service -->