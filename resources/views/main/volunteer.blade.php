@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Epic Awards
@endsection
@section(('content'))


    <div class="container" id="container">

        <div class="row">

            <div class="col-md-12">
                <img src="{{asset('files/volunteer/brand_logo.png')}}" />


            </div>

            <div class="col-md-4">


                <div class="panel panel-primary">
                    <div class="panel-heading">What is a Brand Ambassador? </div>
                    <div class="panel-body">
                        <p>
                            NAMIC Carolinas creates experiences that foster inclusion, equity and career advancement in the communications industry.
                            NAMIC Carolinas is creating the opportunity for Brand Ambassadors. The Brand Ambassadors have the responsibilities of being the face of NAMIC,
                            advocating on behalf of NAMIC and supporting the NAMIC vision.
                            </p>
                        <p>
                            The NAMIC Brand Ambassador should be mission focused to extendand amplify the brand’s reach.
                        </p>


                    </div>

                </div>

            </div>

            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Requirements</div>
                    <div class="panel-body">
                        <ul>
                            <li>Must be a NAMIC member</li>
                            <li>Responsible for representing the image of the organization.</li>
                            <li>Ability to interact/communicate with others in a professional way.</li>
                            <li>Accountability: The ability to work and deliver necessary organization needs.</li>
                            <li>Ability to build relationships and maintain effective working relationships with all levels or leadership.</li>
                            <li>Communication: Must provide constant communication with organization Board Members.</li>
                            <li>Ability to gather feedback and provide innovative insight.</li>
                            <li>Ability to learn and manage social media sites on behalf of NAMIC-Carolinas</li>
                        </ul>


                    </div>

                </div>



            </div>

            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Benifits</div>
                    <div class="panel-body">
                        <ul>
                            <li>Access to executive leadership</li>
                            <li>Ability to network with various organizations, vendors, etc</li>
                            <li>Gain leadership skills</li>
                            <li>Potential career advancement</li>
                            <li>Informal mentoring opportunities</li>
                            <li>Promotes equity</li>
                            <li>New found business/personal relationships</li>
                            <li>Ability to grow and promote career progression via social media</li>
                            <li>Exclusive Swag gifts</li>
                        </ul>


                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Have we piqued your interest?</div>
                    <div class="panel-body">
                        <p>
                            Click the follow link to

                            <a class="btn btn-primary" href="{{ URL::to('ambassador') }}">Apply Now</a>
                        </p>


                    </div>

                </div>
            </div>




        </div>







    </div>







@endsection


