<div class="page-title" style="background-image: url(/assets/images/page-title.png)">
        <h1>{{ Lang::get('ru.contact_us') }}</h1>
    </div>

    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">        
                <h2>{{ Lang::get('ru.message_title') }}</h2>
                <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p>
            </div>
            
            @if(session('status'))
            <div class="col-lg-9" style="margin-left: 135px;">
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            </div>
            @endif

            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none">asdasd</div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{ route('contacts') }}">
                    <div class="col-sm-5 col-sm-offset-1">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="comp_name" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

