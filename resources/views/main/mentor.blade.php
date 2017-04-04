@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Unplugged
@endsection
@section(('content'))
    <div id="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Mentor Minute</div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span ><a target="_blank" href="{{URL::to("https://youtu.be/pQc3oh1Y6rY")}}">
                                <button type="button" class="btn btn-primary btn-sm">Click to View</button></a></span>
                        <div class="pull-right">Jamie Bell - "The Power of Yes"</div>
                    </li>

                </ul>

            </div>

        </div>
    </div>
@endsection