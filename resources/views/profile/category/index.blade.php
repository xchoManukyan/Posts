@extends('layouts.profile')

@section('content')
<add-panel v-bind:name="'category'" v-bind:url="'{{asset('profile/'.$user->name.'/categories/create')}}'"></add-panel>
<div class="row">

@forelse($categories as $category)
    <v-flex xs12 sm4>
        <v-card>
            <v-card-media
            class="white--text"
            height="200px"
            src="{{asset($category->poster)}}"
            >
            <v-container fill-height fluid>
                <v-layout fill-height>
                <v-flex xs12 align-end flexbox>
                    <span class="headline">{{$category->title}}</span>
                </v-flex>
                </v-layout>
            </v-container>
            </v-card-media>
            <v-card-title>
            <div>
                <span>{{$category->description}}</span>
            </div>
            </v-card-title>
            <v-card-actions>
            <v-btn flat color="info">Explore</v-btn>
            <v-btn flat color="info">Show posts</v-btn>
            </v-card-actions>
        </v-card>
    </v-flex>
@empty

    <div class="col-12">
        <div class="jumbotron">
            <h3 class="text-center">No Categories</h3>
        </div>
    </div>
</v-layout>
@endforelse
@endsection