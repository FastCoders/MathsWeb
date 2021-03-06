<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{--<h1><a class="navbar-brand" href="/"><span>T</span>eaching</a></h1>--}}
                {{--<h1><a class="navbar-brand" href="/"><span>තරිඳු පතිරණ</span></a></h1>--}}
                <a class="navbar-brand" href="/"><img src="{{ URL::asset('images/brand.png') }}" alt="First image" style="height: 68px;width: 250px"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--shylock">
                    <div class="agileinfo_social_icons">
                        <ul class="agileinfo_social_icons1">
                            <li><a href="https://www.facebook.com/tharindu.pathirana20" class="facebook"></a></li>
                            {{--<li><a href="#" class="twitter"></a></li>--}}
                            <li><a href="https://plus.google.com/u/0/103521880331015378238" class="google"></a></li>
                            <li><a href="https://www.pinterest.com/tharindu2824/" class="pinterest"></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="{{$home}}"><a href="/" class="hvr-bounce-to-bottom">Home</a></li>
                        <li class="{{$downloads}}"><a href="/download" class="hvr-bounce-to-bottom">Downloads</a></li>
                        {{--<li class="{{$gallery}}"><a href="/gallery" class="hvr-bounce-to-bottom">Gallery</a></li>--}}
                        {{--<li class="{{$results}}"><a href="/results" class="hvr-bounce-to-bottom">Results</a></li>--}}
                        <li class="{{$contact}}"><a href="/contact-me" class="hvr-bounce-to-bottom">Contact Me</a></li>
                        @if(Auth::check())
                            <li><a href="/logout-student" class="hvr-bounce-to-bottom">Logout</a></li>
                        @endif
                    </ul>

                    <div class="clearfix"> </div>
                </nav>
            </div>
        </nav>
    </div>
</div>