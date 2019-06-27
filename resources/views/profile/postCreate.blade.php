@extends('layouts.profile')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/profile/{{$user->name}}/posts" method="post" enctype="multipart/form-data">
            @include('profile.forms.post')
        </form>
    </div>
</div>
@endsection