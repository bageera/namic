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

                    <p><b>Why do you want to join NAMIC?</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('nominee_name', null, array('class' => 'form-control','placeholder' => 'Brief Description of why you want to join')) !!}
            </div>

            <div class="col-md-4">

                <p><b>What attributes do you think you could bring to NAMIC?</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('nominee_name', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-md-4">

                <p><b>How do you plan to get involved in NAMIC</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::select('nominee_award', array('six_man' => 'Brand Ambassador', 'mentorship' => 'Membership Committee',
                'outstanding_tech' => 'Programming Committee', 'revenue' => 'Revenue & Sponsorship Committee',
                    'career' => 'Communication Committee', 'scholarship' => 'Scholarship Committee')) !!}
            </div>
            <div class="clear"></div>
            <div class="col-md-4">

                <p><b>Are you involved in any other organizations / special programs inside/outside work?</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('nominee_name', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-md-4">

                <p><b>How much time per month are you willing to dedicate to support the NAMIC organization</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('nominee_name', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-md-4">

                <p><b>What are you looking to gain from NAMIC</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('nominee_name', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-md-4">

                <p><b>Would your leadership team support your involvement in NAMIC</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('nominee_name', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-md-4">

                <p><b>Do you frequent social media?</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('nominee_name', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>

            <div class="col-md-4">

                <p><b>Are you open to feedback that would promote your career growth?</b></p>

            </div>

            <div class="col-md-8">
                {!! Form::textarea('nominee_name', null, array('class' => 'form-control','placeholder' => 'Brief Description of your attributes')) !!}
            </div>


            </div>
        </div>









@endsection