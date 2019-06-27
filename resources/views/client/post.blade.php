@extends('layouts.client')

@section('content')
<h1 class="mt-4 text-uppercase">{{$post->title}}</h1>
<p class="lead">
    by <a href="{{asset('profile/'.$author->name)}}">{{$author->name}}</a>
</p>
<hr>
<div class="d-flex justify-content-between">
    Posted on {{date_format(date_create($post->created_at), 'F d, Y')}} at {{date_format(date_create($post->created_at), 'H:i')}}

    @if(Gate::allows('checkOwner', $post->user))
        <div class="">
            <a href="{{asset('profile/'.$author->name.'/posts/'.$post->slug.'/edit/')}}" class="btn btn-primary a-btn-slide-text">
                <span><strong>Edit</strong></span>            
            </a>
            <button class="btn btn-danger a-btn-slide-text" type="submit" form="delete-post-{{$post->slug}}">
                <span><strong>Delete</strong></span>
            </button>
            <form id="delete-post-{{$post->slug}}" action="/profile/{{$author->name}}/posts/{{$post->slug}}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
            </form>
            
        </div>
    @endif

</div>
<hr>



<img class="img-fluid rounded w-100" src="{{asset($post->poster)}}" alt="{{$post->poster}}">

@if(!$keywords->isEmpty())
<hr>
<p class="lead">Keywords:
@foreach ($keywords as $keyword)
    <a href="#">{{$keyword->text}}</a> |
@endforeach
</p>
@endif

<hr>
<p class="lead">
    {{$post->content}} 
</p>
<hr>

@endsection