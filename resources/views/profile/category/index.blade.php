@extends('layouts.profile')

@section('content')
<add-panel v-bind:name="'category'" v-bind:url="'{{asset('profile/'.$user->name.'/categories/create')}}'"></add-panel>
@endsection