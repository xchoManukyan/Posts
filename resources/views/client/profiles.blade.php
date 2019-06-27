@extends('layouts.client')

@section('content')

<div class="row">

@forelse($profiles as $profile)
    <div class="col-md-4 mb-3">
        <a href="{{asset('profile/'.$profile->user->name)}}" class="text-dark">
            @component('components.profile', ['profile' => $profile])@endcomponent
        </a>
    </div>
@empty

    <div class="col-12">
        <div class="jumbotron">
            <h3 class="text-center">No Profiles</h3>
        </div>
    </div>
    
@endforelse
</div>
@endsection