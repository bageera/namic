
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="NAMIC Carolinas Chapter Website" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->

    <!-- css includes -->
    <link type="text/css" href="{{asset('css/base.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.3.0/ekko-lightbox.min.css" rel="stylesheet">
    <link type="text/css" href="{{asset('css/freshstart.css')}}" rel="stylesheet" />

    <!--
    <link type="text/css" href="/resources/site/snappages.v1.min.css" rel="stylesheet" />
    <link type="text/css" href="/resources/site/utils/slider/jslider.css" rel="stylesheet" />
    -->

    <!--
    <script src="//code.jquery.com/jquery.js"></script>

    <script type="text/javascript" src="http://www.linkedin.com/js/public-profile/widget-os.js"></script>
    <script type="text/javascript" src="/resources/site/snappages.v1.min.js"></script>
    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
    -->


    <script type="text/javascript">
        $(function(){
            var bgColor = $('#headerLinks').css('background-color');
            if($('#grid').length){
                $('.column:not(.container)').wrapInner('<div class="inner-wrapper" style="background:'+bgColor+';padding:20px;margin-bottom:10px;"></div>');
                $('.column:not(.container)').find('.inner-wrapper').append($('<div style="clear:both;"></div>'));
            }
            $('#content').bind('updated',function(){
                $('.column').find('.inner-wrapper').each(function(){
                    var $this = $(this);
                    $this.replaceWith($this.contents());
                });
                $('.column:not(.container)').wrapInner('<div class="inner-wrapper" style="background:'+bgColor+';padding:20px;margin-bottom:10px;"></div>');
                $('.column:not(.container)').find('.inner-wrapper').append($('<div style="clear:both;"></div>'));
            });
        });
    </script>
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
</head>

<body>
<!-- output body -->



<div id="fb-root"></div>
<script>
    window.fbAsyncInit=function(){FB.init({appId:'137170369651242',status:true,cookie:true,xfbml:true});};
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div id="wrapper">
    <div id="header">

        <div id="headerBg"><div id="headerElements"></div></div>
        <div id="navigation">
            <div id="headerLinks">
                <ul><li style="z-index:81;" class="first" id="nav_home"  >
                        <a class="@if (Request::path() === '/') selected @endif" href="{{ URL::to('/') }}" target="_self"><span></span>Home</a></li>
                    <li style="z-index:79;" id="nav_about-the-chapter"  >
                        <a class="@if (Request::path() === 'chapter') selected @endif" href="{{ URL::to('chapter') }}" target="_self"><span></span>About the Chapter</a>
                    </li>
                    <li style="z-index:78;" id="nav_events"  ><a class="@if (Request::path() === 'events') selected @endif" href="{{ URL::to('events') }}" target="_self"><span></span>Events</a>
                    </li>
                    <li style="z-index:78;" id="nav_awards"  ><a class="disabled" href="#" target="_self"><span></span>Epic Awards</a>
                    </li>
                    <li style="z-index:77;" id="nav_unplugged"  ><a class="@if (Request::path() === 'unplugged') selected @endif" href="{{ URL::to('unplugged') }}" target="_self"><span></span>Unplugged</a>
                    </li>
                    <li style="z-index:76;" id="nav_membership"  ><a class="@if (Request::path() === 'membership') selected @endif" href="{{ URL::to('membership') }}" target="_self"><span></span>Membership</a>
                    </li>
                    <li style="z-index:75;" id="nav_scholarships"  ><a class="@if (Request::path() === 'scholarships') selected @endif" href="{{ URL::to('scholarships') }}" target="_self"><span></span>Scholarships</a>
                    </li>
                    <li style="z-index:74;" class="last" id="nav_event-photos"  ><a class="@if (Request::path() === 'photos') selected @endif" href="{{ URL::to('event-photos') }}" target="_self"><span></span>Event Photos</a>
                    </li>
                </ul>
            </div>
            <div id="secondaryNav" onMouseOver="delaySecondaryNav()" onMouseOut="hideSecondaryNav()"></div>
        </div>

    </div>
@yield('content')

<div id="footer">
    <div id="footerLinks">

        <ul>
            <li class="first"><a href="{{ URL::to('/') }}" target="_self">Home</a>
            </li>
            <li><a href="{{ URL::to('chapter') }}" target="_self">About the Chapter</a>
            </li>
            <li><a href="{{ URL::to('events') }}" target="_self">Events</a>
            </li>
            <li><a href="{{ URL::to('unplugged') }}" target="_self">Unplugged</a>
            </li>
            <li><a href="{{ URL::to('membership') }}" target="_self">Membership</a>
            </li>
            <li><a href="{{ URL::to('scholarships') }}" target="_self">Scholarships</a>
            </li>
            <li class="last"><a href="{{ URL::to('event-photos') }}" target="_self">Event Photos</a>
            </li>
        </ul>
    </div>
    Copyright © {{date('Y')}} - NAMIC-Carolinas<br />
</div>
    <!-- end of wrapper -->
</div>
<!-- javascript includes -->

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
-->
<script src="//code.jquery.com/jquery.js"></script>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.3.0/ekko-lightbox.min.js"></script>
<script type="text/javascript">
    $(document).ready(function ($) {

        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    if (window.console) {
                        return console.log('image loaded');
                    }
                },
                onNavigate: function(direction, itemIndex) {
                    if (window.console) {
                        return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                    }
                }
            });
        });

        //Programatically call
        $('#open-image').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });

        $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    var a = this.modal_content.find('.modal-footer a');
                    if(a.length > 0) {
                        a.click(function(e) {
                            e.preventDefault();
                            this.navigateTo(2);
                        }.bind(this));
                    }
                }
            });
        });

    });
</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-60321727-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>