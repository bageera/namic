@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Epic Awards Nomination
@endsection
@section(('content'))
    <div id="container">
        @include('layouts.partials.flash')
        @include('layouts.partials.error')
            {!! Form::open(['method' => 'POST', 'route' => 'nomination.store']) !!}
        <div class="form-group">


            {!! Form::label('nominee_award', 'Award Category', array('class' => 'col-md-2 control-label')) !!}
            {!! Form::select('nominee_award', array('six_man' => 'Sixth Man', 'mentorship' => 'Mentorship','outstanding_tech' => 'Outstanding Achievements in Technology',
            'career' => 'Career Achievement')) !!}

        </div>
        <div class="form-group">

            {!! Form::label('nominee_name', 'Nominee Name', array('class' => 'col-md-2 control-label')) !!}
            {!! Form::text('nominee_name', null, array('class' => 'form-control','placeholder' => 'Name of Nominee')) !!}

        </div>

        <div class="form-group">

            {!! Form::label('nominee_address', 'Nominee Address', array('class' => 'col-md-2 control-label')) !!}
            {!! Form::text('nominee_address', null, array('class' => 'form-control','placeholder' => 'Address of Nominee')) !!}

        </div>

        <div class="form-group">

            {!! Form::label('nominee_email', 'Nominee Email', array('class' => 'col-md-2 control-label')) !!}
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

            {!! Form::label('nominator_name', "Submitter's Name", array('class' => 'col-md-2 control-label')) !!}
            {!! Form::text('nominator_name', null, array('class' => 'form-control','placeholder' => 'Enter Your Name')) !!}

        </div>

        <div class="form-group">

            {!! Form::label('nominator_address', "Submitter's Address", array('class' => 'col-md-4 control-label')) !!}
            {!! Form::text('nominator_address', null, array('class' => 'form-control','placeholder' => 'Address of Nominator')) !!}

        </div>

        <div class="form-group">

            {!! Form::label('nominator_email', "Submitter's Email", array('class' => 'col-md-2 control-label')) !!}
            {!! Form::text('nominator_email', null, array('class' => 'form-control','placeholder' => 'Email Address of Nominator')) !!}

        </div>

        <div class="form-group">

            {!! Form::label('nominator_phone', "Submitter's Phone Number", array('class' => 'col-md-4 control-label')) !!}
            {!! Form::text('nominator_phone', null, ['class' => 'form-control','placeholder' => 'Contact Number of Nominator']) !!}

        </div>

        <div class="form-group">



            <div class="col-sm-10">
                {!! Form::submit(isset($buttonText) ? $buttonText : 'Submit Nomination',array('class' => 'btn btn-sm btn-primary pull-right m-t-n-xs'))  !!}

            </div>

        </div>


        {!! Form::close() !!}
    </div>

@endsection