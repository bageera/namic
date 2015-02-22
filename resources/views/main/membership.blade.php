@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Membership
@endsection
@section(('content'))
    <div id="container">
        <div id="content" data-layout="twobucket" data-index="13">
            <div id="grid" class="container_24">
                <div id="pageTitle" class="page-title">Membership
                </div><br class="page-title" />
                <div id="billboard" class="billboard-holder" style="display:none;">
                    <div class="billboard empty" data-id="0" data-height="300">

                    </div>
                </div>
                <div class="column container grid_24 alpha">
                    <div class="column grid_24 alpha">
                        <div class="block heading" data-type="heading" data-title="heading" data-id="0">
                            <h3>
                                <div class='h3' style='text-align:left;'>
                                    NAMIC-Carolinas History
                                </div>
                            </h3>
                        </div>
                        <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="1">
                            <img src="{{asset('img/membership/668243_1456321_1401287926.jpg')}}" style='float:left;'  class='image' />
                            <div style="">
                                The NAMIC-Carolinas chapter was formed in 2006.
                                Carol Hevey, EVP of the East Region at Time Warner Cable championed the Carolinas Chapter initiative by bringing it to the Time Warner Cable home base.
                                Since then, we’ve made extensive strides in the areas of Career Development with our Lunch and Learn programs, Digital Media Summits,
                                Career Development Workshops, Seminars and our Collegiate Scholarship Program. Through our educational offerings and industry-wide initiatives,
                                NAMIC-Carolinas continues to broaden its impact as demographic shifts, and as globalization and technology rapidly change the way we do business.
                            </div>
                        </div>
                        <div class="block heading" data-type="heading" data-title="heading" data-id="2">
                            <h3>
                                <div class='h3' style='text-align:left;'>
                                    NAMIC National
                                </div>
                            </h3>
                        </div>
                        <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="3">
                            <img src="{{asset('img/membership/668243_1456323_1401287926.jpg')}}" style='float:right;padding-left:20px;padding-right:0px;'  class='image' />
                            <div style="">
                                NAMIC (National Association for Multi-ethnicity in Communications) is the premier organization focusing on multi-ethnic diversity in the
                                communications industry. Founded in 1980 as a non-profit trade association,
                                today NAMIC is comprised of 2,300 professionals belonging to a network of 16 chapters nationwide. Through initiatives that focus on education,
                                advocacy and empowerment, NAMIC champions equity and inclusion in the workforce,
                                with special attention given to ensuring that the leadership cadres of our nation’s communications industry giants reflect the multi-ethnic richness
                                of the populations they serve.
                                <a href="http://www.namic.com" target="_blank"><b>www.namic.com</b></a> or visit "DiversityLive: The NAMIC Video Network" at
                                <a href="http://www.diversitylive.net" target="_blank"><b>www.diversitylive.net</b></a>.
                            </div>
                        </div>
                        <div class="block heading" data-type="heading" data-title="heading" data-id="4">
                            <h3>
                                <div class='h3' style='text-align:center;'>
                                    NAMIC Chapters
                                </div>
                            </h3>
                        </div>
                        <div class="block image" data-type="image" data-title="image" data-id="5">
                            <div align='center'>
                                <img src="{{asset('img/membership/668243_1452958_1401287926.png')}}" align='center'  class='image ' />
                            </div>
                        </div>
                        <div class="block heading" data-type="heading" data-title="heading" data-id="6">
                            <h3>
                                <div class='h3' style='text-align:left;'>
                                    Professional Development
                                </div>
                            </h3>
                        </div>
                    </div>
                    <div class="column grid_12 alpha">
                        <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="7">
                            <a href='http://www.namic.com/profdev/eldp/index.php' target='_self' class='imageLink'>
                                <img src="{{asset('img/membership/668243_1452508_1401287926.png')}}" style='float:left;'  class='image' />
                            </a>
                            <div style=""><br><b>Executive Leadership Development Program (ELDP)</b>
                            </div>
                        </div>
                        <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="8">
                            <a href='http://www.namic.com/profdev/leadership/index.php' target='_self' class='imageLink'>
                                <img src="{{asset('img/membership/668243_1452508_1401287926.png')}}" style='float:left;'  class='image' />
                            </a>
                            <div style=""><br><b>Leadership Seminar</b>
                            </div>
                        </div>
                        <div class="block heading" data-type="heading" data-title="heading" data-id="9">
                            <h1>
                                <div class='h1' style='text-align:left;'>
                                    Follow Us
                                </div>
                            </h1>
                        </div>
                        <div class="block socialicons" data-type="socialicons" data-title="socialicons" data-id="10">
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
                    </div>
                    <div class="column grid_12 omega">
                        <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="11">
                            <a href='http://www.namic.com/profdev/mentorship/index.php' target='_self' class='imageLink'>
                                <img src="{{asset('img/membership/668243_1452508_1401287926.png')}}" style='float:left;'  class='image' />
                            </a>
                            <div style=""><br><b>L. Patrick Mellon Mentorship Program</b>
                            </div>
                        </div>
                        <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="12">
                            <a href='https://namic.site-ym.com/general/register_member_type.asp' target='_self' class='imageLink'>
                                <img src="{{asset('img/membership/668243_1457840_1401287926.png')}}" style='float:left;'  class='image' />
                            </a>
                            <div style=""><br>
                                For more Membership information<b> </b><br>
                                <a href="https://namic.site-ym.com/general/register_member_type.asp" target="_self">click here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>
@endsection