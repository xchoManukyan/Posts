@include('sections.header')
<div class="container">
    <div class="row">
        <div class="col-md-9 mb-4">
            @yield('content')
            
        </div>
        <div class="col-md-3">
            @include('sections.rightBar')
        </div>
    </div>
</div>
@include('sections.footer')