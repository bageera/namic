@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Epic Awards Nomination
@endsection
@section(('content'))
    <div id="container">
        @include('layouts.partials.flash')
        @include('layouts.partials.error')
        <div class="row">
            <div class="col-md-7">
                {!! Form::open(['method' => 'POST', 'route' => 'nomination.store']) !!}
                <div class="form-group">


                    {!! Form::label('nominee_award', 'Award Category', array('class' => 'col-md-4 control-label')) !!}
                    {!! Form::select('nominee_award', array('six_man' => 'Sixth Man', 'mentorship' => 'Mentorship','outstanding_tech' => 'Outstanding Achievements in Technology',
                    'career' => 'Career Achievement')) !!}

                </div>
                <div class="form-group">

                    {!! Form::label('nominee_name', 'Nominee Name', array('class' => 'col-md-4 control-label')) !!}
                    {!! Form::text('nominee_name', null, array('class' => 'form-control','placeholder' => 'Name of Nominee')) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('nominee_address', 'Nominee Address', array('class' => 'col-md-4 control-label')) !!}
                    {!! Form::text('nominee_address', null, array('class' => 'form-control','placeholder' => 'Address of Nominee')) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('nominee_email', 'Nominee Email', array('class' => 'col-md-4 control-label')) !!}
                    {!! Form::text('nominee_email', null, array('class' => 'form-control','placeholder' => 'Email Address of Nominee')) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('nominee_phone', 'Nominee Phone Number', array('class' => 'col-md-4 control-label')) !!}
                    {!! Form::text('nominee_phone', null, ['class' => 'form-control','placeholder' => 'Contact Number of Nominee']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('nominee_reason', 'Reason for Nominating', array('class' => 'col-md-4 control-label')) !!}
                    {!! Form::textarea('nominee_reason', null, array('class' => 'form-control','placeholder' => 'Please tell us in 250-500 words why this person is worthy of the award')) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('nominator_name', "Submitter's Name", array('class' => 'col-md-4 control-label')) !!}
                    {!! Form::text('nominator_name', null, array('class' => 'form-control','placeholder' => 'Enter Your Name')) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('nominator_address', "Submitter's Address", array('class' => 'col-md-4 control-label')) !!}
                    {!! Form::text('nominator_address', null, array('class' => 'form-control','placeholder' => 'Address of Nominator')) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('nominator_email', "Submitter's Email", array('class' => 'col-md-4 control-label')) !!}
                    {!! Form::text('nominator_email', null, array('class' => 'form-control','placeholder' => 'Email Address of Nominator')) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('nominator_phone', "Submitter's Phone Number", array('class' => 'col-md-5 control-label')) !!}
                    {!! Form::text('nominator_phone', null, ['class' => 'form-control','placeholder' => 'Contact Number of Nominator']) !!}

                </div>

                <div class="form-group">



                    <div class="col-sm-8">
                        {!! Form::submit(isset($buttonText) ? $buttonText : 'Submit Nomination',array('class' => 'btn btn-sm btn-primary pull-right m-t-n-xs'))  !!}

                    </div>

                </div>


                {!! Form::close() !!}
            </div>
            <div class="col-md-5">

                <div class="panel panel-primary">
                    <div class="panel-heading">EPIC Awards Submission Criteria </div>
                    <div class="panel-body">

                        <ul class="list-unstyled">
                            <li class="list-group-item list-group-item-info">Sixth Man Award</li>
                                <ul class="list-group">
                                    <li class="list-group-item">Open to anyone in a supervisor level or below without direct reports in the Telecommunications industry.</li>
                                    <li class="list-group-item">An active individual contributor to programs and professional associations that advocate diversity. </li>
                                    <li class="list-group-item">Demonstrates exceptional support of their team by:
                                        <ol class="list-group">

                                                <li class="list-group-item">Encouraging teamwork and collaboration.</li>
                                                <li class="list-group-item">Being supportive and encouraging team members to support each other.</li>
                                                <li class="list-group-item">Focusing on positive work relationships and encouraging others to do the same.</li>
                                                <li class="list-group-item">Creating or promoting a team vision within their department.</li>
                                                <li class="list-group-item">Inspiring inclusion and commitment to the team’s vision.</li>

                                        </ol>
                                    </li>
                                </ul>
                            </li>

                            <li class="list-group-item list-group-item-info">Mentorship Award</li>
                                <ul class="list-group">
                                    <li class="list-group-item">This person will be someone that is a supervisor level or above in the Telecommunications industry.</li>
                                    <li class="list-group-item">Takes a personal interest in the mentoring relationship.</li>
                                    <li class="list-group-item">Willingness to share skills, knowledge, and expertise consistently.</li>
                                    <li class="list-group-item">Values ongoing learning and growth in the field.</li>
                                    <li class="list-group-item">Motivates others by setting a good example.</li>
                                    <li class="list-group-item">Sets and meets ongoing personal and professional goals.</li>
                                </ul>
                            </li>
                            <li class="list-group-item list-group-item-info">Outstanding Achievements in Technology</li>
                                <ul class="list-group">
                                    <li class="list-group-item">An active individual contributor to programs and professional associations that advocate diversity.</li>
                                    <li class="list-group-item">Senior leader within the NAMIC-Carolinas footprint.</li>
                                    <li class="list-group-item">Demonstrates strategic effectiveness in advancing technology in the Telecommunications industry.</li>
                                    <li class="list-group-item">Leader that is in a technical field or is a contributor in technology.</li>
                                    <li class="list-group-item">Recipient must be a Director level employee or above.</li>
                                    <li class="list-group-item"></li>
                                </ul>
                            </li>
                            <li class="list-group-item list-group-item-info">Career Achievement award</li>
                                <ul class="list-group">
                                    <li class="list-group-item">Exceptional career-long contributor in programs and professional associations for diversity advocacy.</li>
                                    <li class="list-group-item">Recipient will have been in the cable and/or telecommunications industry at least five (5) years.</li>
                                    <li class="list-group-item">Recipient must be a VP Level or above.</li>
                                </ul>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>
    </div>

@endsection