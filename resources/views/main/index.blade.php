
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="NAMIC Carolinas Chapter Website" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

    <title>NAMIC-Carolinas - NAMIC-Carolinas Chapter Website</title>

    <!-- css includes -->
    <link type="text/css" href="{{asset('css/base.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link type="text/css" href="/resources/site/snappages.v1.min.css" rel="stylesheet" />
    <link type="text/css" href="/resources/site/utils/slider/jslider.css" rel="stylesheet" />

    <!-- javascript includes -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
    <!-- <script type="text/javascript" src="http://www.linkedin.com/js/public-profile/widget-os.js"></script> -->
    <script type="text/javascript" src="/resources/site/snappages.v1.min.js"></script>
    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>



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
    </script></head>

<!-- output body -->

<body>

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
                        <a class="selected" href="/home.htm" target="_self"><span></span>Home</a></li>
                    <li style="z-index:79;" id="nav_about-the-chapter"  >
                        <a href="/about-the-chapter.htm" target="_self"><span></span>About the Chapter</a>
                    </li>
                    <li style="z-index:78;" id="nav_events"  ><a href="/events.htm" target="_self"><span></span>Events</a>
                    </li>
                    <li style="z-index:77;" id="nav_unplugged"  ><a href="/unplugged.htm" target="_self"><span></span>Unplugged</a>
                    </li>
                    <li style="z-index:76;" id="nav_membership"  ><a href="/membership.htm" target="_self"><span></span>Membership</a>
                    </li>
                    <li style="z-index:75;" id="nav_scholarships"  ><a href="/scholarships.htm" target="_self"><span></span>Scholarships</a>
                    </li>
                    <li style="z-index:74;" class="last" id="nav_event-photos"  ><a href="/event-photos.htm" target="_self"><span></span>Event Photos</a>
                    </li>
                </ul>
            </div>
            <div id="secondaryNav" onMouseOver="delaySecondaryNav()" onMouseOut="hideSecondaryNav()"></div>
        </div>

    </div>
    <div id="container">
        <div id="content" data-layout="twobucketside" data-index="13">
            <div id="grid" class="container_24">
                <div id="billboard" class="billboard-holder">
                    <div class="billboard" data-id="133252" data-title="Home2" data-format="basic" data-height="300" data-transition="fade" data-autoplay="true" data-timing="5" data-hidecontrols="true" data-theme="bevel" data-effect="none" style="height:300px;">
                        <img src="{{asset('img/main/124145_1787777.jpg')}}" data-loaded="false" data-src="{{asset('img/main/124145_1787777.jpg')}}" alt="" data-customfonts="Arial,Arial" data-source="124145_1787777.jpg" data-heading="Welcome to the NAMIC-Carolinas Website!" data-headingfont="Arial" data-headingsize="30" data-headingbold="true" data-headingitalic="false" data-headingcolor="#FFFFFF" data-headingweight="700" data-headingletterspacing="0" data-caption="" data-captionfont="Arial" data-captionsize="14" data-captionbold="false" data-captionitalic="false" data-captioncolor="#FFFFFF" data-captionweight="400" data-captionletterspacing="0" data-hpos="left" data-vpos="bottom" data-style="black" data-url="" data-target="" data-offset="-9" data-tint="rgba(255,50,50,0)" />
                    </div>
                </div>
                <div class="column container grid_24 alpha">
                    <div class="column container grid_16 alpha">
                        <div class="column grid_16 alpha">
                            <div class="block heading" data-type="heading" data-title="heading" data-id="0">
                                <h3>
                                    <div class='h3' style='text-align:left;'>Building the Next Generation of Leaders
                                    </div>
                                </h3>
                            </div>
                            <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="1">
                                <img src='{{asset('img/main/716743_1456350_1401288004.png')}}' style='float:left;'  class='image' />
                                <div style="">
                                    NAMIC-Carolinas is an Award-Winning chapter serving North and South Carolina.
                                    We provide programming that helps to meet the mission of our national chapter NAMIC (National Association for Multi-ethnicity in Communications) to educate,
                                    advocate and empower for multi-ethnic diversity within the communications industry.<br><br>
                                    With signature programs such as Lunch and Learns, Digital Media Summits and Career Development Workshops,
                                    we keep you ahead of the curve with how technology is shaping our industry and creative ways to be prepared professionally.<br><br>
                                    Please explore our website to learn more about how NAMIC-Carolinas could assist you with growth and development professionally!
                                </div>
                            </div>
                            <div class="block divider" data-type="divider" data-title="divider" data-id="2">
                                <div class="divider"></div>
                            </div>
                        </div>
                        <div class="column grid_8 alpha"><div class="block image" data-type="image" data-title="image" data-id="3">
                                <div align='center'>
                                    <img src="{{asset('img/main/716743_1635910_1401288004.jpg')}}" align='center'  class='image ' />
                                </div>
                            </div>
                            <div class="block text" data-type="text" data-title="text" data-id="4">
                                <div style=""><div>
                                        <a aria-describedby="ui-tooltip-17" href="http://www.namic.com/newsletters/wpdev/qa-with-garth-david-director-finance-time-warner-cable-and-namic-carolinas-president/" target="_self">Q&amp;A with Our NAMIC-Carolinas Advisor, David Garth </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="column grid_8 omega">
                            <div class="block image" data-type="image" data-title="image" data-id="5">
                                <div align='center'>
                                    <img src="{{asset('img/main/716743_1787781_1401288004.jpg')}}" align='center'  class='image ' />
                                </div>
                            </div>
                            <div class="block text" data-type="text" data-title="text" data-id="6">
                                <div style="">Join WICT Carolinas and NAMIC-Carolinas for our quarterly Book Nook Meeting.
                                    <b> </b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column grid_8 omega">
                        <div class="block heading" data-type="heading" data-title="heading" data-id="7">
                            <h3>
                                <div class='h3' style='text-align:left;'>Follow Us
                                </div>
                            </h3>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="8">
                            <div style="">
                                NAMIC-Carolinas can be found on Facebook, Twitter and LinkedIn. Be sure to follow and Like us today!
                            </div>
                        </div>
                        <div class="block socialicons" data-type="socialicons" data-title="socialicons" data-id="9">
                            <div style='float:left;padding-bottom:5px;padding-right:5px;'>
                                <a href='http://www.facebook.com/NAMICCarolinasChapter' target='_blank' class='imageLink'>
                                    <img src="{{asset('img/main/facebook-32x32.png')}}" alt='follow on'/>
                                </a>
                            </div>
                            <div style='float:left;padding-bottom:5px;padding-right:5px;'>
                                <a href='https://twitter.com/#!/NAMICCarolinas' target='_blank' class='imageLink'>
                                    <img src="{{asset('img/main/twitter-32x32.png')}}" alt='follow on'/>
                                </a>
                            </div>
                            <div style='float:left;padding-bottom:5px;padding-right:5px;'>
                                <a href='http://www.linkedin.com/groups/NAMICCarolinas-4141647?home=&gid=4141647&trk=anet_ug_hm' target='_blank' class='imageLink'>
                                    <img src="{{asset('img/main/linkedin-32x32.png')}}" alt='follow on'/>
                                </a>
                            </div>
                        </div>
                        <div class="block heading" data-type="heading" data-title="heading" data-id="10">
                            <h3>
                                <div class='h3' style='text-align:left;'>
                                    Become a Member
                                </div>
                            </h3>
                        </div>
                        <div class="block image" data-type="image" data-title="image" data-id="11">
                            <div align='left'>
                                <a href='https://namic.site-ym.com/general/register_member_type.asp' target='_self' class='imageLink'>
                                    <img src="{{asset('img/main/716743_1457817_1401288004.png')}}" style='float:left;'  class='image ' />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>

    <div id="footer">
        <div id="footerLinks">

            <ul>
                <li class="first"><a href="/home.htm" target="_self">Home</a>
                </li>
                <li><a href="/about-the-chapter.htm" target="_self">About the Chapter</a>
                </li>
                <li><a href="/events.htm" target="_self">Events</a>
                </li>
                <li><a href="/unplugged.htm" target="_self">Unplugged</a>
                </li>
                <li><a href="/membership.htm" target="_self">Membership</a>
                </li>
                <li><a href="/scholarships.htm" target="_self">Scholarships</a>
                </li>
                <li class="last"><a href="/event-photos.htm" target="_self">Event Photos</a>
                </li>
            </ul>
        </div>
        Copyright © 2013 - NAMIC-Carolinas<br />
    </div>
</div>
</body>
</html>

