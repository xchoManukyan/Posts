@include('sections.header')
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            @include('profile.sections.profileMenu')
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>
@include('sections.footer')