@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - NAMIC-Carolinas Chapter Website
@endsection
@section(('content'))

    <div id="container">

        <div class="row">
            <!-- banner -->
            <div class="col-md-16">

                <img src="{{asset('img/main/headbanner.png')}}" data-loaded="false" data-src="{{asset('img/main/headbanner.png')}}">
            </div>
            <div class="col-md-8">
                <h3 class="h3">
                    Building the Next Generation of Leaders

                </h3>

            </div>
            <div class="col-md-4">
                <h3 class="h3">
                    Follow Us

                </h3>

            </div>
        </div>
        <div class="row">

            <div class="block imagetext col-md-8" data-type="imagetext" data-title="imagetext" data-id="1">
                <img src='{{asset('img/main/716743_1456350_1401288004.png')}}' style='float:left;'  class='image' />
                <div style="">
                    NAMIC-Carolinas is an Award-Winning chapter serving North and South Carolina.
                    We provide programming that helps to meet the mission of our national chapter NAMIC (National Association for Multi-ethnicity in Communications) to educate,
                    advocate and empower for multi-ethnic diversity within the communications industry.<br><br>
                    With signature programs such as Lunch and Learns, Digital Media Summits and Career Development Workshops,
                    we keep you ahead of the curve with how technology is shaping our industry and creative ways to be prepared professionally.<br><br>
                    Please explore our website to learn more about how NAMIC-Carolinas could assist you with growth and development professionally!
                </div>


                <div class="block heading" data-type="heading" data-title="heading" data-id="12">
                    <h3>
                        <div class='h3' style='text-align:left;'>
                            Our Mission
                        </div>
                    </h3>
                </div>
                <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="3">
                    <div style="">
                        <p>
                            NAMIC Carolinas creates experiences that foster Inclusion, Equity and Career Advancement in the Communications Industry
                        </p>
                        <p>
                            Core Values - Innovative, Inclusive, Relevant, Authentic, Development focused
                        </p>



                    </div>
                </div>


                <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="3">
                    <div class="media">




                    </div>
                </div>

            </div>



            <!-- right sidebar -->
            <div class="col-md-4">
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
                    <h3 class="h3">

                        Become a Member

                    </h3>

                    <div class="panel panel-primary">
                        <div class="panel-heading">Annoucements </div>
                        <div class="panel-body">
                            <p>
                                <b>New</b> Mentor Minute
                                <a href="{{ URL::to('mentor') }}">Click Here</a>
                            </p>


                        </div>

                    </div>
                </div>


                <div class="block image" data-type="image" data-title="image" data-id="11">
                    <div align='left'>
                        <a href='https://namic.site-ym.com/general/register_member_type.asp' target='_self' class='imageLink'>
                            <img src="{{asset('img/main/716743_1457817_1401288004.png')}}" style='float:left;'  class='image ' />
                        </a>
                    </div>
                </div>
                <div class="block image" data-type="image" data-title="image" data-id="20">
                    <div align='left'>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="CFQQTDWGZP7CS">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>



        </div>

        <div class="row">


        </div>






    </div>

@endsection