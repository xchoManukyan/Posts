@extends('layouts.profile')

@section('content')
<div class="card mb-3">
    <div class="card-header"><h3>Personal data</h3></div>
    <div class="card-body">
        <table class="w-100 table">
            <tr>
                <td class="border-0">First Name:</td>
                <td class="border-0 text-capitalize">{{$profile->first_name}}</td>
            </tr>
            <tr>
                <td class="border-bottom border-info">Last Name:</td>
                <td class="text-capitalize border-bottom border-info">{{$profile->last_name}}</td>
            </tr>
            <tr>
                <td class="border-bottom border-info">Gender:</td>
                <td class="text-capitalize border-bottom border-info">{{$profile->gender}}</td>
            </tr>
            <tr>
                <td class="">Birdth Date:</td>
                <td class="text-capitalize">{{$profile->birth_date}}</td>
            </tr>
        </table>
    </div>
</div> 

<div class="card mb-3">
    <div class="card-header"><h3>Contacts</h3></div>
    <div class="card-body">
        <table class="w-100 table">
            <tr>
                <td class="border-0">Email:</td>
                <td class="border-0">{{$user->email}}</td>
            </tr>
            <tr>
                <td class="border-bottom border-info">Phone:</td>
                <td class="text-capitalize border-bottom border-info">{{$profile->phone}}</td>
            </tr>
            <tr>
                <td>Adress:</td>
                <td class="text-capitalize">{{$profile->adress}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header text-capitalize"><h3>About {{$user->name}}</h3></div>
    <div class="card-body">
        <h5>{{$profile->about}}</h5>
    </div>
</div>

@endsection