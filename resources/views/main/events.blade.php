@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Events
@endsection
@section(('content'))
    <div id="container">
        <div id="content" data-layout="twocolumnc" data-index="23"><div id="grid" class="container_24">
                <div id="pageTitle" class="page-title">Events</div><br class="page-title" />
                    <div id="billboard" class="billboard-holder" style="display:none;">
                        <div class="billboard empty" data-id="0" data-height="300">

                        </div>
                    </div>
                <div class="column container grid_24 alpha">
                    <div class="column grid_18 alpha">
                        <div class="block heading" data-type="heading" data-title="heading" data-id="0">
                            <h3>
                                <div class='h3' style='text-align:left;'>Lunch &amp; Learns
                                </div>
                            </h3>
                        </div>
                        <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="1">
                            <img src="{{asset('img/events/685423_1456313_1407944650.jpg')}}" style='float:left;'  class='image' />
                            <div style="">
                                Lunch and Learns are designed to give a concentrated informational approach to a “working lunch”.
                                They were created to give area professionals quick insights into industry updates, career news, and product and skills training,
                                as well as professional development.
                                Industry leaders provide advice for professional growth and personal development based on their individual experiences when climbing the corporate ladder.
                                It is a way to provide specialty training that most times are not offered within a Corporate environment.
                                Each program is designed based on current industry trends relative to career growth opportunities,
                                servicing: Charlotte, Greensboro, Raleigh, and South Carolina
                            </div>
                        </div>

                        <div class="block heading" data-type="heading" data-title="heading" data-id="0">
                            <h3>
                                <div class='h3' style='text-align:left;'>Epic Awards
                                </div>
                            </h3>
                        </div>
                        <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="1">
                            <img src="{{asset('img/events/epic-awards.jpg')}}" style='float:left;'  class='image' />
                            <div style="">
                                <p>
                                    The NAMIC-Carolinas EPIC (Exceptional Person In Communications) Award was created to recongnize
                                    the outstanding achievements of leaders who advocate for Excellence and Diversity within the
                                    communication industry.
                                </p>
                                <p>
                                    NAMIC-Carolinas holds a yearly event to bring these exemplary leaders together to not only recognize them, but to inspire
                                    others to follow in the footsteps of these awardees to make their mark on the industry.
                                </p>
                            </div>
                        </div>

                        <div class="block heading" data-type="heading" data-title="heading" data-id="4">
                            <h3>
                                <div class='h3' style='text-align:left;'>
                                    Career Development
                                </div>
                            </h3>
                        </div>
                        <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="5">
                            <img src="{{asset('img/events/685423_1456316_1407944650.jpg')}}" style='float:left;'  class='image' />
                            <div style="">
                                Career Development Workshops are an opportunity for NAMIC-Carolinas members, guests,
                                and the community to come together while partnering with area professionals.
                                Industry professionals share  their expertise  on such topics as:
                                Résumés, Interviewing, Networking, Social Media, Business Communications, Diversity and Inclusion, or anything that will assist our attendees in making
                                the most out of their career choices and potential business opportunities.
                                NAMIC-Carolinas has taken an active role in mentoring, educating, and advocating the development of our business partners
                                and community leaders and members by providing these Workshops.
                            </div>
                        </div>
                        <div class="block heading" data-type="heading" data-title="heading" data-id="6">
                            <h3>
                                <div class='h3' style='text-align:left;'>
                                    Follow Us
                                </div>
                            </h3>
                        </div>
                        <div class="block socialicons" data-type="socialicons" data-title="socialicons" data-id="7">
                            <div style='float:left;padding-bottom:5px;padding-right:5px;'>
                                <a href='http://www.facebook.com/NAMICCarolinasChapter' target='_blank' class='imageLink'>
                                    <img src="{{asset('img/main/facebook-32x32.png')}}" alt='follow on'/>
                                </a>
                            </div>
                            <div style='float:left;padding-bottom:5px;padding-right:5px;'>
                                <a href='http://twitter.com/#!/NAMICCarolinas' target='_blank' class='imageLink'>
                                    <img src="{{asset('img/main/twitter-32x32.png')}}" alt='follow on'/>
                                </a>
                            </div>
                            <div style='float:left;padding-bottom:5px;padding-right:5px;'>
                                <a href='http://www.linkedin.com/groups/NAMICCarolinas-4141647?home=&gid=4141647&trk=anet_ug_hm' target='_blank' class='imageLink'>
                                    <img src="{{asset('img/main/linkedin-32x32.png')}}" alt='follow on'/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column grid_6 omega">
                        <div class="block heading" data-type="heading" data-title="heading" data-id="8">
                            <h3>
                                <div class='h3' style='text-align:left;'>
                                    2018 Event Calendar
                                </div>
                            </h3>
                        </div>
                        <div class="block download" data-type="download" data-title="download" data-id="17">
                            <div align="left">
                                <div class="download-button rollover" align="left" style="padding:7px;display:inline-block;" data-fileID="101980" data-url="{{asset('files/events/2017NAMIC-CarolinasCalendar.pdf')}}" data-type="pdf" >

                                    <div style="float:left;margin-left:5px;margin-top:-2px;">
                                        <div style="font-weight:bold;font-size:15px;margin-bottom:-2px;">Coming Soon</div>

                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>
@endsection