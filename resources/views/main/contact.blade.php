@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - NAMIC-Carolinas Chapter Website
@endsection
@section(('content'))

    <div id="container" class="container">

        <div class="row">

            <div class="col-lg-11">
                <div id="pageTitle" class="page-title">
                    Contact the Chapter
                </div>
                @include('layouts.partials.flash')
                @include('layouts.partials.error')
            </div>
        </div>
        <div class="row">

            <div class="col-lg-11">

                {!! Form::open(['method' => 'POST', 'route' => 'contact', 'class' => 'form-horizontal']) !!}

                <div class="form-group">

                    {!! Form::label('name', 'Full Name', array('class' => 'col-md-2 control-label')) !!}
                    <div class="col-sm-6">
                        {!! Form::text('name', null, array('class' => 'form-control','placeholder' => 'Full Name')) !!}
                    </div>
                </div>

                    <div class="form-group">

                        {!! Form::label('email', 'Email Address', array('class' => 'col-md-2 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'Email Address')) !!}
                        </div>
                    </div>

                <div class="form-group">


                    {!! Form::label('reason_for_contact', 'Category', array('class' => 'col-md-2 control-label')) !!}
                    <div class="col-sm-6">
                        {!! Form::select('reason_for_contact', array('general' => 'General', 'membership' => 'Membership','volunteer' => 'Volunteer',
                        'scholarship' => 'Scholarship')) !!}
                    </div>
                </div>


                <div class="form-group">

                    {!! Form::label('Message', 'Message', array('class' => 'col-md-2 control-label')) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('contact_message', null, array('class' => 'form-control','placeholder' => 'Message')) !!}
                    </div>
                </div>



                <div class="form-group">


                    <div class="col-sm-8">
                        {!! Form::submit(isset($buttonText) ? $buttonText : 'Submit',array('class' => 'btn btn-sm btn-primary pull-right m-t-n-xs'))  !!}

                    </div>

                </div>


                {!! Form::close() !!}
                </div>

            </div>


        </div>


@endsection