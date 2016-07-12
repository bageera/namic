@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - About the Chapter
@endsection
@section(('content'))

<div id="container">
    <div id="content" data-layout="threecolumn" data-index="46">
        <div id="grid" class="container_24">
            <div id="pageTitle" class="page-title">
                About the Chapter
            </div>
            <br class="page-title" />
            <div id="billboard" class="billboard-holder" style="display:none;">
                <div class="billboard empty" data-id="0" data-height="300">

                </div>
            </div>
            <div class="column container grid_24 alpha">
                <div class="column grid_24 alpha">
                    <div class="block heading" data-type="heading" data-title="heading" data-id="31">
                        <h1><div class='h1' style='text-align:left;'>
                                {{date('Y')}} BOARD MEMBERS
                            </div>
                        </h1>
                    </div>
                </div>
                <div class="column container grid_24 alpha">
                    <div class="column grid_6 alpha">
                        <div class="block image" data-type="image" data-title="image" data-id="21">
                            <div align='left'>
                                <img src="{{asset('img/chapter/monica_alexander.jpg')}}" style='float:left;'  class='image ' />
                            </div>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="26">
                            <div style=""><b>President</b><br>
                                Monica Alexander
                            </div>
                        </div>
                    </div>
                    <div class="column grid_6"><div class="block image" data-type="image" data-title="image" data-id="22">
                            <div align='left'>
                                <img src="{{asset('img/chapter/garthdavid.jpg')}}" style='float:left;'  class='image ' />
                            </div>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="27">
                            <div style=""><b>Vice President</b><br>
                                David Garth
                            </div>
                        </div>
                    </div>
                    <div class="column grid_6">
                        <div class="block image" data-type="image" data-title="image" data-id="23">
                            <div align='left'>
                                <img src="{{asset('img/chapter/ccuevas.jpg')}}" style='float:left;'  class='image ' />
                            </div>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="28">
                            <div style="">
                                <b>Treasurer</b><br>
                                Carlos Cuevas
                            </div>
                        </div>
                    </div>
                    <div class="column grid_6">
                        <div class="block image" data-type="image" data-title="image" data-id="24">
                            <div align='left'>
                                <img src="{{asset('img/chapter/lcouncil.jpg')}}" style='float:left;'  class='image ' />
                            </div>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="29">
                            <div style="">
                                <b>Secretary</b><br>
                                Lakeysia Council
                            </div>
                        </div>
                    </div>
                    <div class="column grid_6 omega">
                        <div class="block image" data-type="image" data-title="image" data-id="24">
                            <div align='left'>
                                <img src="{{asset('img/chapter/monica_moore.jpg')}}" style='float:left;'  class='image ' />
                            </div>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="29">
                            <div style="">
                                <b>Immediate Past President</b><br>
                                Monica Moore
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="column container grid_24">
                <div class="column grid_24 alpha">
                    <div class="block heading" data-type="heading" data-title="heading" data-id="30">
                        <h1>
                            <div class='h1' style='text-align:left;'>
                                {{date('Y')}} Advisory Committee
                            </div>
                        </h1>
                    </div>
                </div>
                <div class="column container grid_24 alpha">
                    <div class="column grid_6 alpha">

                        <div class="block image" data-type="image" data-title="image" data-id="32">
                            <div align='left'>
                                <img src="{{asset('img/chapter/mholmes.png')}}" style='float:left;'  class='image ' />
                            </div>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="45">
                            <div style="">Advisor<br>
                                Mark Holmes<br>
                                VP Decision Support, Finance<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>

                        <div class="block image" data-type="image" data-title="image" data-id="32">
                            <div align='left'>
                                <img src="{{asset('img/chapter/dhegar.jpg')}}" style='float:left;'  class='image ' />
                            </div>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="45">
                            <div style="">Advisor<br>
                                Darrel Hegar<br>
                                RVP, Operations<br>
                                Time Warner Cable

                            </div>
                        </div>

                    </div>
                    <div class="column grid_6">

                        <div class="block image" data-type="image" data-title="image" data-id="33">
                            <div align='left'>
                                <img src="{{asset('img/chapter/swashington.png')}}" style='float:left;'  class='image ' />
                            </div>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="39">
                            <div style="">Advisor<br>
                                Shawn Washington<br>
                                Director, Strategic Procurement<br>

                            </div>
                        </div>

                        <div class="block image" data-type="image" data-title="image" data-id="32">
                            <div align='left'>
                                <img src="{{asset('img/chapter/charlene.jpg')}}" style='float:left;'  class='image ' />
                            </div>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="45">
                            <div style="">Advisor<br>
                                Charlene Keys<br>
                                AVP, Field Operations<br>
                                Time Warner Cable

                            </div>
                        </div>



                    </div>
                    <div class="column grid_6">
                        <div class="block image" data-type="image" data-title="image" data-id="34">
                            <div align='left'>
                                <img src="{{asset('img/chapter/showe.png')}}" style='float:left;'  class='image ' />
                            </div>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="40">
                            <div style="">Advisor<br>
                                Sandra Howe<br>
                                SVP, Global Marketing<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;<br>
                            </div>
                        </div>


                    </div>

                    <div class="column grid_6 omega">
                        <div class="block image" data-type="image" data-title="image" data-id="33">
                            <div align='left'>
                                <img src="{{asset('img/chapter/668219_2347058_1404240590.png')}}" style='float:left;'  class='image ' />
                            </div>
                        </div>
                        <div class="block text" data-type="text" data-title="text" data-id="39">
                            <div style="">Advisor<br>
                                Charlon McIntosh<br>
                                RVP, BC Customer Care<br>
                                Time Warner Cable
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="column grid_24">
                <div class="block heading" data-type="heading" data-title="heading" data-id="17">
                    <h3>
                        <div class='h3' style='text-align:left;'>
                            Follow Us
                        </div>
                    </h3>
                </div>
                <div class="block socialicons" data-type="socialicons" data-title="socialicons" data-id="18">
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
                <div class="block image" data-type="image" data-title="image" data-id="20">
                    <div align='left'>
                        <a href='https://namic.site-ym.com/general/register_member_type.asp' target='_blank' class='imageLink'>
                            <img src="{{asset('img/chapter/668219_1457822_1404240590.png')}}" style='float:left;'  class='image ' />
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
            <div style="clear:both;"></div>
        </div>
    </div>

</div>
   @endsection