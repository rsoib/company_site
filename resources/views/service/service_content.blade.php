 <div class="page-title" style="background-image: url(assets/images/page-title.png)">
        <h1>{{ Lang::get('ru.services') }}</h1>
 </div>
    
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