@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Event Photos
@endsection
@section(('content'))
    <div id="container">

        <div class="panel panel-primary">
            <div class="panel-heading">Lunch and Learn 2014 </div>
            <div class="panel-body">

               @foreach($files as $file)
                    <div class="col-lg-2 col-sm-3 col-xs-4">
                        <a href="{{$file}}">
                            <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
                        </a>
                    </div>
                   @endforeach

            </div>
        </div>
    </div>
@endsection