@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Epic Awards
@endsection
@section(('content'))


    <div class="container" id="container">

        <div class="row">

            <div class="col-md-12">
                <div id="pageTitle" class="page-title">We are looking for you!</div><br class="page-title" />

            </div>

            <div class="col-md-4">

                <div class="block imagetext" data-type="imagetext" data-title="imagetext" data-id="3">
                    Interesting in becoming a Brand Ambassador?

                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">What is a Brand Ambassador? </div>
                    <div class="panel-body">
                        <p>
                            NAMIC Carolinas creates experiences that foster inclusion, equity and career advancement in the communications industry.
                            NAMIC Carolinas is creating the opportunity for Brand Ambassadors. TheBrand Ambassadors have the responsibilities of being the face of NAMIC,
                            advocating on behalf of NAMICand supporting the NAMIC vision.
                            The NAMIC Brand Ambassador should be mission focused to extendand amplify the brand’s reach.
                        </p>


                    </div>

                </div>

            </div>

            <div class="col-md-8">
                <p>Click the following link to view the
                    <a target="_blank" href="{{asset('files/volunteer/brandambassador_job_survey.pdf')}}">Job Summary</a><img src="{{asset('img/events/pdf_file_30.png')}}" />
                    and take the survey below.</p>

                <p><a href="{{url('/ambassador')}}">Survey</a></p>



            </div>

        </div>







    </div>







@endsection


