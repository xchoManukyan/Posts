@extends('layouts.profile')

@section('content')

@if(Gate::allows('checkOwner', $user))
    <div class="text-right mb-3">
        <a href="posts/create"><button class="btn btn-info text-white">Add new</button></a>
    </div>
    <hr>
@endif

<div class="row">

@forelse($posts as $post)
    <div class="col-md-4 mb-3">
        @component('components.post', ['post' => $post])@endcomponent
    </div>
@empty

    <div class="col-12">
        <div class="jumbotron">
            <h3 class="text-center">No Posts</h3>
        </div>
    </div>
    
@endforelse
</div>
@endsection