@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Event Photos
@endsection
@section(('content'))
    <div id="container">

        <div id="demoLightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class='lightbox-content'>
                <img src="http://placehold.it/200x200">
                <div class="lightbox-caption"><p>Your caption here</p></div>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">EPIC Awards 2016 </div>
            <div class="panel-body">

                @foreach($epic2016 as $file)

                    <div class="col-lg-2 col-sm-3 col-xs-4">
                        <a href="{{$file}}" data-toggle="lightbox" data-gallery="lunchnlearn2014">

                            <img src="{{dirname($file)}}/thumb/{{basename($file)}}" class="thumbnail img-responsive">
                        </a>
                    </div>

                @endforeach

            </div>
        </div>


        <div class="panel panel-primary">
            <div class="panel-heading">Exceptional Committee Member and Rookie of the Year Award</div>
            <div class="panel-body">

                @foreach($rookie as $file)

                    <div class="col-lg-2 col-sm-3 col-xs-4">
                        <a href="{{$file}}" data-toggle="lightbox" data-gallery="lunchnlearn2014">

                            <img src="{{dirname($file)}}/thumb/{{basename($file)}}" class="thumbnail img-responsive">
                        </a>
                    </div>

                @endforeach

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">NAMIC Chapter Awards 2015 </div>
            <div class="panel-body">

                @foreach($chapter2015 as $file)

                    <div class="col-lg-2 col-sm-3 col-xs-4">
                        <a href="{{$file}}" data-toggle="lightbox" data-gallery="lunchnlearn2014">

                            <img src="{{dirname($file)}}/thumb/{{basename($file)}}" class="thumbnail img-responsive">
                        </a>
                    </div>

                @endforeach

            </div>
        </div>


    </div>


@endsection