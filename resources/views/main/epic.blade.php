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
                    achievements of leaders who advocate for Excellence and Dicersity within the communications industry.
                </p>
            </div>
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">The Sixth Man Award </div>
                    <div class="panel-body">
                        <p>
                            The sixth man in basketball is a player who is not a starter, but comes off the bench much more
                            often than other reserves, and often is the first player to be substituted in the game. The presence
                            of a good sixth man is often a sign of a team excellence. These team members also act as leaders and step up beyond their position
                            requirements to lead their department to excellence.
                        </p>

                    </div>
                    <div class="panel-footer">2015 Winners
                        <ul>
                            <li><b>Jamie Bell</b> - Supervisor, Customer Care, TWC</li>

                        </ul>
                    </div>
                    <div class="panel-footer">2014 Winners
                        <ul>
                            <li><b>Linnette Banks</b> - Supervisor, Customer Care, TWC</li>
                            <li><b>Tameka Green</b> - Manager, Diversity and Inclusion, TWC</li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">Mentorship Award </div>
                    <div class="panel-body">
                        <p>
                            This candidate for this award has a strong history of mentoring others throughout their career. They
                            empower and advocate for others through both formal and informal mentoring.
                        </p>

                    </div>
                    <div class="panel-footer">2015 Winner
                        <ul>
                            <li><b>Khanspasha Feaster</b></li>

                        </ul>
                    </div>
                    <div class="panel-footer">2014 Winner
                        <ul>
                            <li><b>Charlon McIntosh</b> - GVP, Customer Care, TWCBC</li>

                        </ul>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">Outstanding Achievements in Technology </div>
                    <div class="panel-body">
                        <p>
                            This award recognizes a leader with visionary ability that has contributed to the advancement of Technology in the
                            Communications Industry. This individual is viewed as an industry pioneer and supports others through mentorship, career development
                            and advocacy of diversity in the Communications Industry.
                        </p>

                    </div>
                    <div class="panel-footer">2015 Winner
                        <ul>
                            <li><b>James Manchester</b></li>

                        </ul>
                    </div>
                    <div class="panel-footer">2014 Winner
                        <ul>
                            <li><b>Sandra Howe</b> - SVP, Global Marketing, ARRIS</li>

                        </ul>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">Career Achievement Award </div>
                    <div class="panel-body">
                        <p>
                            This is the highest award given in the NAMIC - Carolinas Leadership Recognition Program. This individual
                            exemplifies a Senior Leader in the Communications Industry that has consistently supported and advocated for Diversity int he Communications
                            Industry. This individual not only blazed a path for others to follow, but helped support others that are on the career ladder to
                            advance their careers.
                        </p>

                    </div>
                    <div class="panel-footer">2015 Winner
                        <ul>
                            <li><b>Charlon McIntosh</b></li>

                        </ul>
                    </div>
                    <div class="panel-footer">2014 Winner
                        <ul>
                            <li><b>Mike Lajoie</b> - EVP, Chief Tech and NetOps, TWC</li>

                        </ul>
                    </div>
                </div>

                </div>
            <div class="col-md-4">
                <img src="{{asset('img/epic/side1_2015.jpg')}}" style='float:left;'  class='img-thumbnail' />
                <br />
                <img src="{{asset('img/epic/side2_2015.jpg')}}" style='float:left;'  class='img-thumbnail' />
                <br />
                <div class="block heading" data-type="heading" data-title="heading" data-id="8">
                    <h3 class="h3">

                            EPIC Awards Submission Form

                    </h3>
                </div>
                <div class="block download" data-type="download" data-title="download" data-id="17">
                    <div align="left">
                        <div class="download-button rollover" align="left" style="padding:7px;display:inline-block;" data-fileID="101980" data-url="{{asset('files/events/New 2014 NAMIC Program Calendar communication2.pdf')}}" data-type="pdf" >
                            <img src="{{asset('img/events/pdf_file_30.png')}}" style="float:left;"/>
                            <img src="{{asset('img/events/cloud_download_25.png')}}" style="margin-top:8px;margin-left:-15px;float:left"/>
                            <div style="float:left;margin-left:5px;margin-top:-2px;">
                                <div style="font-weight:bold;font-size:15px;margin-bottom:-2px;">Submission Form</div>
                                <a href="{{asset('files/epic/epicform.docx')}}">click to download</a>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection


