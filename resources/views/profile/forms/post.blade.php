@csrf
<div class="form-group">
    <div class="form-row">
        <div class="col-4">
            <label for="title">Title:</label>
        </div>
        <div class="col-8">
            <input type="text" class="form-control" placeholder="Insert Title" required name="title" id="title" value="@isset($post->title) {{$post->title}} @endisset">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="form-row">
        <div class="col-4">
            <label for="description">Description:</label>
        </div>
        <div class="col-8">
            <textarea rows="4" class="form-control" placeholder="Insert Description" required name="description" id="description">@isset($post->description) {{$post->description}} @endisset</textarea>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="form-row">
        <div class="col-4">
            <label for="title">Content:</label>
        </div>
        <div class="col-8">
            <textarea rows="10" class="form-control" placeholder="Insert Content" required name="content" id="content">@isset($post->content) {{$post->content}} @endisset</textarea>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="form-row">
        <div class="col-4">
            <label for="poster">Poster:</label>
        </div>
        
        <div class="col-8">
            @isset($post->poster) <img src="{{asset($post->poster)}}" class="rounded img-fluid mb-3"> @endisset
            <input type="file" placeholder="Choose Poster" @if(!isset($post->poster)) required @endif name="poster" id="poster">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="form-row">
        <div class="col-4">
            <label for="poster">Keywords:</label>
        </div>
        
        <div class="col-8">
            <keyword-select v-bind:keywords="@if(!isset($post->keywords)) {{json_encode(array())}} @else {{ json_encode($post->keywords->pluck('text')) }} @endif"></keyword-select>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="form-row">
        <div class="col-4">
            <input type="submit" class="btn btn-success" value="Submit">
        </div>
    </div>
</div>