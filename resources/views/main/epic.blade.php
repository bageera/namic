@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Epic Awards
@endsection
@section(('content'))


    <div id="container">
        <div id="pageTitle" class="page-title">Epic Awards</div><br class="page-title" />
            <div>
                <p>
                    The NAMIC-Carolinas EPIC (Exceptional Person In Communications) Awards were created to recognize the outstanding
                    achievements of leaders who advocate for Excellence and Diversity within the communications industry.
                </p>
            </div>
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">The Sixth Man Award </div>
                    <div class="panel-body">
                        <p>
                            The Sixth Man in basketball is a player who is not a starter, but comes off the bench much more
                            often than other reserves, and often is the first player to be substituted in the game. The presence
                            of a good Sixth Man is often a sign of a team excellence. These team members also act as leaders and step up beyond their position
                            requirements to lead their department to excellence.
                        </p>

                    </div>
                    <div class="panel-footer">2017 Winners
                        <ul>
                            <li><b>Tanara Tipton</b> - Systems & Tools Business Analyst, Charter Communications</li>
                            <li><b>Xavion Newkirk</b> </li>

                        </ul>
                    </div>
                    <div class="panel-footer">2016 Winners
                        <ul>
                            <li><b>Omar Ferguson</b> - Supervisor, Tech Ops, Charter Communications</li>

                        </ul>
                    </div>
                    <div class="panel-footer">2015 Winners
                        <ul>
                            <li><b>Jamie Bell</b> - Supervisor, Order Management, Commercial Services, TWC</li>

                        </ul>
                    </div>

                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">Mentorship Award </div>
                    <div class="panel-body">
                        <p>
                            The candidate for this award has a strong history of mentoring others throughout their career. They
                            empower and advocate for others through both formal and informal mentoring.
                        </p>

                    </div>
                    <div class="panel-footer">2017 Winners
                        <ul>
                            <li><b>Jamie Bell</b> - Manager, Commercial Technical Repair, Charter Communications</li>

                        </ul>
                    </div>
                    <div class="panel-footer">2016 Winners
                        <ul>
                            <li><b>Maree Gbolewweefaa</b> - Director, Project Management & Communications, Charter Communications</li>

                        </ul>
                    </div>
                    <div class="panel-footer">2015 Winner
                        <ul>
                            <li><b>Khanspasha Feaster</b> - Sr. Director, Leadership Development</li>

                        </ul>
                    </div>

                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">Outstanding Achievements in Technology </div>
                    <div class="panel-body">
                        <p>
                            This award recognizes a visionary leader who has contributed to the advancement of technology in the
                            Communications industry. This individual is viewed as a pioneer and who supports others through mentorship, career development
                            and advocacy of diversity in the Communications Industry.
                        </p>

                    </div>
                    <div class="panel-footer">2017 Winners
                        <ul>
                            <li><b>Louis Suggs</b> - Manager, IT Support, INSP</li>

                        </ul>
                    </div>
                    <div class="panel-footer">2016 Winners
                        <ul>
                            <li><b>Stacey Woods</b> - Vice President, Human Resources, Charter Communications</li>

                        </ul>
                    </div>

                    <div class="panel-footer">2015 Winner
                        <ul>
                            <li><b>James Manchester</b> - SVP, Video Ecosystem/App Ops</li>

                        </ul>
                    </div>

                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">Career Achievement Award </div>
                    <div class="panel-body">
                        <p>
                            This is the highest award given in the NAMIC - Carolinas Leadership Recognition Program. This individual
                            exemplifies a Senior Leader in the Communications industry that has consistently supported and advocated for Diversity int he Communications
                            industry. This individual has not only blazed a trail for others to follow, but has akso helped to support others in advancing their careers.
                        </p>

                    </div>
                    <div class="panel-footer">2017 Winners
                        <ul>
                            <li><b>Charlene Keys</b> - AVP, Field Operations, Charter Communications</li>

                        </ul>
                    </div>
                    <div class="panel-footer">2016 Winners
                        <ul>
                            <li><b>Darrel Hegar</b> - RVP, Operations, Charter Communications</li>

                        </ul>
                    </div>
                    <div class="panel-footer">2015 Winner
                        <ul>
                            <li><b>Charlon McIntosh</b> - GVP, Customer Care, Customer Service</li>

                        </ul>
                    </div>

                </div>

                </div>
            <div class="col-md-4">
                <div class="block">
                    <img src="{{asset('img/epic/side1_2015.jpg')}}" style='float:left;'  class='img-thumbnail' />
                    <br />
                    <img src="{{asset('img/epic/side2_2015.jpg')}}" style='float:left;'  class='img-thumbnail' />
                    <br />
                        <div class="block heading" data-type="heading" data-title="heading" data-id="8">
                            <h3 class="h3">

                                    EPIC Awards <b>2017</b> Submission Form <sub>Closes Aug 30</sub>

                            </h3>
                        </div>
                </div>
                <div class="block download" data-type="download" data-title="download" data-id="17">
                    <div align="left">
                        <div class="download-button rollover" align="left" style="padding:7px;display:inline-block;" data-fileID="101980" data-url="{{asset('files/events/New 2014 NAMIC Program Calendar communication2.pdf')}}" data-type="pdf" >
                            <img src="{{asset('img/events/pdf_file_30.png')}}" style="float:left;"/>
                            <img src="{{asset('img/events/cloud_download_25.png')}}" style="margin-top:8px;margin-left:-15px;float:left"/>
                            <div style="float:left;margin-left:5px;margin-top:-2px;">
                                <div style="font-weight:bold;font-size:15px;margin-bottom:-2px;">Submission Form</div>
                                <a href="{{url('epic-nominations')}}">click to submit</a>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="panel panel-primary">
                    <div class="panel-heading">EPIC Awards 2015 Video </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">

                                <a target="_blank" href="{{URL::to("https://www.dropbox.com/s/zf6g2i6i79tr2wm/NAMIC%20EPIC%20Awards%202015.wmv?dl=0")}}">
                                    <button type="button" class="btn btn-primary">Click to View</button></a>
                            </li>

                        </ul>

                    </div>

                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">Auction Item Winners</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">Shakina Johnson</span>
                                Embassy Suite One Night Stay
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Karen Reid</span>
                                Autographed Football of LB Thomas Davis
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Brenda Curry</span>
                                Carolina Panther Package
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Stacey Woods</span>
                                African Heritage Artwork
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Ninnet Bowman</span>
                                Basketball Autographed by NBA Star Stephen Curry
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Jim Dessi</span>
                                Charlotte Bobcats/Hornets Package Memorabilia Jerseys
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="block">


                </div>



            </div>


        </div>

    </div>

@endsection


