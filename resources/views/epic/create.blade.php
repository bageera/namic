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

                                                <li class="list-group-item">Active contributor in programs and professional associations for diversity advocacy.</li>
                                                <li class="list-group-item">This person could function in a non-supervisory, supervisor, or manager role in the Communication industry.</li>
                                                <li class="list-group-item">Demonstrates exceptional support of their team.</li>


                                        </ol>
                                    </li>
                                </ul>
                            </li>

                            <li class="list-group-item list-group-item-info">Mentorship Award</li>
                                <ul class="list-group">
                                    <li class="list-group-item">An active individual contributor to programs and professional associations that advocate diversity.</li>
                                    <li class="list-group-item">A person whose job title is Supervisor or above.</li>
                                    <li class="list-group-item">Highly regarded as a leader within the Communications industry.</li>
                                    <li class="list-group-item">Someone who participated in the L Patrick Mellon mentorship program.</li>

                                </ul>
                            </li>
                            <li class="list-group-item list-group-item-info">Outstanding Achievements in Technology</li>
                                <ul class="list-group">
                                    <li class="list-group-item">An active individual contributor to programs and professional associations that advocate diversity.</li>
                                    <li class="list-group-item">Senior leader Director or above that is also a member of NAMIC-Carolinas</li>
                                    <li class="list-group-item">A person who demonstrates strategic effectiveness in advancing technology in the Communications Industry.</li>


                                </ul>
                            </li>
                            <li class="list-group-item list-group-item-info">Career Achievement award</li>
                                <ul class="list-group">
                                    <li class="list-group-item">An active contributor to programs and professional associations that advocate diversity.</li>
                                    <li class="list-group-item">Senior leader VP Level or higher that is also a member of NAMIC-Carolinas organization.</li>
                                </ul>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>
    </div>

@endsection