@if($feature)
    
    <section id="feature">
        <div class="container">
            <div class="center fadeInDown">
                <h2>{{ Lang::get('ru.features') }}</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="features">
                    @foreach($feature as $item)
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="{{ $item->icon }}"></i>
                            </div>
                            <h2>{{ $item->title }}</h2>
                            <p>{{ $item->text }}</p>
                        </div>
                    </div>
                    @endforeach
            
                </div>
            </div>
        </div>
    </section>
    <!--/#feature-->

@endif