@extends('layouts.client')

@section('content')

@auth
    <add-panel v-bind:name="'Post'" v-bind:url="'{{asset('profile/'.auth()->user()->name.'/posts/create')}}'"></add-panel>
@endauth

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