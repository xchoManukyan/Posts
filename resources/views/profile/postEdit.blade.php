@extends('layouts.profile')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/profile/{{$user->name}}/posts/{{$post->slug}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @include('profile.forms.post')
        </form>
    </div>
</div>
@endsection