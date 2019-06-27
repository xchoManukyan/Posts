<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

use Illuminate\Support\Facades\Gate;

class ProfileController extends Controller
{   

    public function profile($username)
    {   
        $user = User::where('name', $username)->with('profile')->firstOrFail();

        if(!Gate::allows('checkOwner', $user)){
            return view('profile/show', ['user' => $user, 'profile' =>  $user->profile]);
        }
        
        return view('profile/dashboard', ['user' => $user, 'profile' =>  $user->profile]);
    }

    public function info($username)
    {   
        
        $user = User::where('name', $username)->with('profile')->firstOrFail();
        
        if(!Gate::allows('checkOwner', $user)){
            return view('profile/info', ['user' => $user, 'profile' => $user->profile]);
        }

        return view('profile/edit', ['user' => $user, 'profile' => $user->profile]);
    }

    public function update(Request $request, $username)
    {   
        $user = User::where('name', $username)->with('profile')->firstOrFail();

        if(!Gate::allows('checkOwner', $user)){
            abort(403, 'not Authorized');
        }

        $request->validate([
            'name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'phone' => 'required',
            'adress' => 'required',
            'about' => 'required',
            'icon' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->icon) {
            $data['icon'] = 'storage/'.$request->icon->store('profiles');
        }

        $user = User::findOrFail(auth()->id());
        $user->update($data);

        $profile = Profile::findOrFail($user->profile->id);
        $profile->update($data);

        return redirect('profile/'.$user->name)->with('success', 'Profile updated!');
    }
}
