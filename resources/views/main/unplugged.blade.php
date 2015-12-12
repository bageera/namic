@extends('layouts.base')
@section('title')
    NAMIC-Carolinas - Unplugged
@endsection
@section(('content'))
    <div id="container">
        <div id="content" data-layout="twocolumn" data-index="6">
            <div id="grid" class="container_24">
                <div id="billboard" class="billboard-holder" style="display:none;">
                    <div class="billboard empty" data-id="0" data-height="300">

                    </div>
                </div>
                <div class="column grid_24 alpha">
                    <div class="block image" data-type="image" data-title="image" data-id="0">
                        <div align='center'>
                            <img src="{{asset('img/unplugged/1473201_2172659_1400674529.jpg')}}" align='center'  class='image ' />
                        </div>
                    </div>
                    <div class="block text" data-type="text" data-title="text" data-id="1">
                        <div style="text-align:center;">Issues:<br>
                            <br>
                            <a aria-describedby="ui-tooltip-17" href="{{URL::to('issue-1')}}" target="_self">
                                NAMIC-Carolinas UNPLUGGED Issue 1.0
                            </a>
                        </div>
                    </div>
                    <div class="block text" data-type="text" data-title="text" data-id="5">
                        <div style="text-align:center;">
                            <a href="{{asset('files/unplugged/NAMIC_Unplugged_2.0.pdf')}}" target="_blank">
                                NAMIC-Carolinas UNPLUGGED Issues 2.0
                            </a>
                        </div>
                    </div>
                    <div class="block text" data-type="text" data-title="text" data-id="5">
                        <div style="text-align:center;">
                            <a href="{{asset('files/unplugged/NAMIC_unplugged_3.0.pdf')}}" target="_blank">
                                NAMIC-Carolinas UNPLUGGED Issues 3.0
                            </a>
                        </div>
                    </div>
                    <div class="block text" data-type="text" data-title="text" data-id="5">
                        <div style="text-align:center;">
                            <a href="{{asset('files/unplugged/NAMIC_unplugged_4.0.pdf')}}" target="_blank">
                                NAMIC-Carolinas UNPLUGGED Issues 4.0
                            </a>
                        </div>
                    </div>
                </div>
                <div style="clear:both;">

                </div>
            </div>
        </div>
    </div>
@endsection