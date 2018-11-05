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
            <div class="panel-heading">NAMIC EPIC Awards 2018 </div>
            <div class="panel-body">

                @foreach($epic2018 as $file)

                    <div class="col-lg-2 col-sm-3 col-xs-4">
                        <a href="{{$file}}" data-toggle="lightbox" data-gallery="lunchnlearn2014">

                            <img src="{{dirname($file)}}/thumb/{{basename($file)}}" class="thumbnail img-responsive">
                        </a>
                    </div>

                @endforeach

            </div>
        </div>
        
        
        <div id="demoLightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class='lightbox-content'>
                <img src="http://placehold.it/200x200">
                <div class="lightbox-caption"><p>Your caption here</p></div>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">NAMIC & WICT Carolinas Annual Winter Party </div>
            <div class="panel-body">

                @foreach($wict2018 as $file)

                    <div class="col-lg-2 col-sm-3 col-xs-4">
                        <a href="{{$file}}" data-toggle="lightbox" data-gallery="lunchnlearn2014">

                            <img src="{{dirname($file)}}/thumb/{{basename($file)}}" class="thumbnail img-responsive">
                        </a>
                    </div>

                @endforeach

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">EPIC Awards 2017 </div>
            <div class="panel-body">

                @foreach($epic2017 as $file)

                    <div class="col-lg-2 col-sm-3 col-xs-4">
                        <a href="{{$file}}" data-toggle="lightbox" data-gallery="lunchnlearn2014">

                            <img src="{{dirname($file)}}/thumb/{{basename($file)}}" class="thumbnail img-responsive">
                        </a>
                    </div>

                @endforeach

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">NAMIC WICT 2017 </div>
            <div class="panel-body">

                @foreach($wict2017 as $file)

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