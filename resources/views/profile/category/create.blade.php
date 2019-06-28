@extends('layouts.profile')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Create Category</h2>
    </div>
    <div class="card-body">
        <form action="/profile/{{$user->name}}/categories" method="post" enctype="multipart/form-data">
            @include('profile.forms.category')
        </form>
    </div>
</div>
@endsection