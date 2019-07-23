<div class="page-title" style="background-image: url(assets/images/page-title.png)">
        <h1>About us</h1>
    </div>

    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-img">
                        <img src="assets/images/about-img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2>Who we are</h2>
                        <p>Photographs are a way of preserving a moment in our lives for the rest of our lives. Many of us have at least been tempted at the flashy array of photo printers which seemingly leap off the shelves at even the least tech-savvy. It surely seems old fashioned to talk about 35mm film and non-digital cameras in today’s day and age.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

@if($personals)
<section id="team-area">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="row">
                @foreach($personals as $personal)
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="assets/images/{{ $personal->images }}" alt="">
                        </div>
                        <div class="team-content">
                            <h4>{{ $personal->name }} {{ $personal->lastname }}</h4>
                            <span class="desg">{{ $personal->position }}</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endif