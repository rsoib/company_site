<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">{{ Lang::get('ru.footer_text') }}</a>
                </div>
                @if($m_footer)
                    <div class="col-sm-6">
                        <ul class="pull-right">
                            @foreach($m_footer as $footer)
                                <li><a href="{{ $footer->path }}">{{ $footer->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </footer>