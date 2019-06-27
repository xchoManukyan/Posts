@extends('layouts.profile')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/profile/{{$user->name}}/edit" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4">
                        <label for="name">Username:</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" placeholder="Insert Username" required name="name" id="name" value="{{$user->name}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4">
                        <label for="first_name">First Name:</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" placeholder="Insert First Name" required name="first_name" id="first_name" value="{{$profile->first_name}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4">
                        <label for="first_name">Last Name:</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" placeholder="Insert Last Name" required name="last_name" id="last_name" value="{{$profile->last_name}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4">
                        <label>Gender:</label>
                    </div>
                    <div class="col-8">
                        <label class="radio inline">
                            <input type="radio" name="gender" value="male" @if ($profile->gender == 'male') checked @endif>
                            <span> Male </span> 
                        </label>
                        <label class="radio inline"> 
                            <input type="radio" name="gender" value="female" @if ($profile->gender == 'female') checked @endif>
                            <span>Female </span> 
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4">
                        <label for="birth_date">Birdth Date:</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" placeholder="Insert Birth Date" required name="birth_date" id="birth_date" value="{{$profile->birth_date}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4">
                        <label for="icon">Icon:</label>
                    </div>
                    
                    <div class="col-8">
                        <img src="{{asset($profile->icon)}}" class="rounded img-fluid mb-3">
                        <input type="file" placeholder="Choose Icon" name="icon" id="icon">
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4">
                        <label for="email">Email:</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" placeholder="Insert Email" required name="email" id="email" value="{{$user->email}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4">
                        <label for="email">Phone:</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" placeholder="Insert Phone" required name="phone" id="phone" value="{{$profile->phone}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4">
                        <label for="adress">Adress:</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" placeholder="Insert Adress" required name="adress" id="adress" value="{{$profile->adress}}">
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4">
                        <label for="about">About Me:</label>
                    </div>
                    <div class="col-8">
                        <textarea rows="4" class="form-control" placeholder="About me" required name="about" id="about">{{$profile->about}}</textarea>
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
        </form>
    </div>
</div> 
@endsection