@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - NAMIC-Carolinas Chapter Website
@endsection
@section(('content'))

    <div id="container" class="container">

        <div class="row">

            <div class="col-lg-10">
                <div id="pageTitle" class="page-title">
                    Contact the Chapter
                </div>
                @include('layouts.partials.flash')
                @include('layouts.partials.error')
            </div>
            <div class="clear"></div>
            <div class="col-lg-11">
                <form class="form-horizontal">
                {!! Form::open(['method' => 'POST', 'route' => 'contact']) !!}

                <div class="form-group">

                    {!! Form::label('name', 'Full Name', array('class' => 'col-md-2 control-label')) !!}
                    {!! Form::text('name', null, array('class' => 'form-control','placeholder' => 'Full Name')) !!}

                </div>

                <div class="form-group">


                    {!! Form::label('reason_for_contact', 'Category', array('class' => 'col-md-2 control-label')) !!}
                    {!! Form::select('reason_for_contact', array('general' => 'General', 'membership' => 'Membership','volunteer' => 'Volunteer',
                    'scholarship' => 'Scholarship')) !!}

                </div>


                <div class="form-group">

                    {!! Form::label('Message', 'Message', array('class' => 'col-md-2 control-label')) !!}
                    {!! Form::textarea('message', null, array('class' => 'form-control','placeholder' => 'Message')) !!}

                </div>

                <div class="form-group">


                    <div class="col-sm-10">
                        {!! Form::submit(isset($buttonText) ? $buttonText : 'Submit',array('class' => 'btn btn-sm btn-primary pull-right m-t-n-xs'))  !!}

                    </div>

                </div>


                {!! Form::close() !!}
                </div>
            </div>


        </div>

    </div>

@endsection