<div class="card">
    <img class="card-img-top" src="{{asset($post->poster)}}" alt="{{$post->poster}}">
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{mb_strimwidth($post->description, 0, 70, "...")}}</p>
        <a href="{{asset('posts/'.$post->slug)}}" class="btn btn-primary">Read More</a>
    </div>
</div>