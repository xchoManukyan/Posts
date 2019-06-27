@component('components.profile', ['profile' => $user->profile])@endcomponent

<ul class="list-group">
    <a href="/profile/{{$user->name}}" class="btn p-0">
        <li class="{{ request()->is('profile/'.$user->name) ? 'bg-info text-white' : 'text-dark' }} rounded-0 list-group-item d-flex justify-content-between align-items-center">
            Dashboard
        </li>
    </a>
    <a href="/profile/{{$user->name}}/info" class="btn p-0">
        <li class="{{ request()->is('profile/'.$user->name.'/info') ? 'bg-info text-white' : 'text-dark' }} rounded-0 list-group-item d-flex justify-content-between align-items-center rounded-0">
            Profile
        </li>
    </a>
    <a href="/profile/{{$user->name}}/posts" class="btn p-0">
        <li class="{{ request()->is('profile/'.$user->name.'/posts/*') || request()->is('profile/'.$user->name.'/posts') ? 'bg-info text-white' : 'text-dark' }} rounded-0 list-group-item d-flex justify-content-between align-items-center rounded-0">
            Posts
        </li>
    </a>

    @if($user->isAuthorizeRoles('admin'))

    <a href="/profile/{{$user->name}}/categories" class="btn p-0">
        <li class="{{ request()->is('profile/'.$user->name.'/categories/*') || request()->is('profile/'.$user->name.'/categories') ? 'bg-info text-white' : 'text-dark' }} rounded-0 list-group-item d-flex justify-content-between align-items-center rounded-0">
            Categories
        </li>
    </a>

    @endif

</ul>