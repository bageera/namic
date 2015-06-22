@if (Session::get('flash_message'))
    <div id="flash-message" class="container">
        <div class="alert alert-info">
            {{ Session::get('flash_message') }}
        </div>
    </div>
@endif