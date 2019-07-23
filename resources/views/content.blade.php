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

<!-- Start Skills -->
@if($skills)
<section id="middle" class="skill-area" style="background-image: url(assets/images/skill-bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 fadeInDown">
                    <div class="skill">
                        <h2>{{ Lang::get('ru.our_skill') }}</h2>
                        <p>All users on MySpace will know that there are millions of people out there. Every <br> day besides so many people joining this community.</p>
                    </div>
                </div>
                <!--/.col-sm-6-->

              @foreach($skills as $skill)
                <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3>{{ $skill->title }}</h3>
                        <div class="progress">
                            <div class="progress-bar  color{{ $skill->id }}" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->percent }}%">
                                <span class="bar-width">{{ $skill->percent }}</span>
                            </div>

                        </div>
                    </div>
                </div>
              @endforeach
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#middle-->
@endif
<!-- End Skills -->  

<div style="margin-bottom:80px;"></div>

<!-- Start Partners Section -->

@if($partners)

<section id="partner">
        <div class="container">
            <div class="center fadeInDown">
                <h2>{{ Lang::get('ru.our_partners') }}</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="partners">
                <ul>
                    @foreach($partners as $partner)
                        <li>
                            <a href="{{ $partner->part_url }}"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="assets/images/{{ $partner->icon}}"></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#partner-->



@endif

<!-- End Partners Section -->