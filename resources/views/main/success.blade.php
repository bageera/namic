@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - NAMIC-Carolinas Chapter Website
@endsection
@section(('content'))

    <div id="container" class="container">

        <div class="col-lg-11">
            <div id="pageTitle" class="page-title">
                Thank you
            </div>
            @include('layouts.partials.flash')
            @include('layouts.partials.error')
        </div>

    </div>

@endsection