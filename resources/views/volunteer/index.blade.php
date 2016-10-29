@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Epic Awards
@endsection
@section(('content'))


    <div id="container">

        @include('layouts.partials.flash')
        @include('layouts.partials.error')
        <div class="row">
            {!! Form::open(['method' => 'POST', 'route' => 'survey']) !!}

            <div class="col-md-4">

                <p><b>Full Name</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::text('name', null, array('class' => 'form-control','placeholder' => 'Name')) !!}
            </div>
            <div class="col-md-4">

                <p><b>Email Address</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'Email Address')) !!}
            </div>

            <div class="col-md-4">

                    <p><b>Why do you want to join NAMIC?</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('desc_join', null, array('class' => 'form-control','placeholder' => 'Brief Description of why you want to join')) !!}
            </div>

            <div class="col-md-4">

                <p><b>What attributes do you think you could bring to NAMIC?</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('get_involved', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-md-4">

                <p><b>How do you plan to get involved in NAMIC</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::select('are_you_involved', array('brand_ambassador' => 'Brand Ambassador', 'mentorship' => 'Membership Committee',
                'programming' => 'Programming Committee', 'revenue' => 'Revenue & Sponsorship Committee',
                    'communication' => 'Communication Committee', 'scholarship' => 'Scholarship Committee')) !!}
            </div>
            <div class="clear"></div>
            <div class="col-md-4">

                <p><b>Are you involved in any other organizations / special programs inside/outside work?</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('desc_involved', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-md-4">

                <p><b>How much time per month are you willing to dedicate to support the NAMIC organization</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('desc_time_available', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-md-4">

                <p><b>What are you looking to gain from NAMIC</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('desc_gain', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-md-4">

                <p><b>Would your leadership team support your involvement in NAMIC</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('leadership_support', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-md-4">

                <p><b>Do you frequent social media?</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('social_media', null, array('class' => 'form-control','placeholder' => 'Facebook, Twitter, Linkedin')) !!}
            </div>

            <div class="col-md-4">

                <p><b>Are you open to feedback that would promote your career growth?</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('open_feedback', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-sm-8">
                {!! Form::submit(isset($buttonText) ? $buttonText : 'Submit Survey',array('class' => 'btn btn-sm btn-primary pull-right m-t-n-xs'))  !!}

            </div>


            </div>
        </div>









@endsection