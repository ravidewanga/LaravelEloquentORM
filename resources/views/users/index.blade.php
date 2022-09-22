<h1>Users List</h1>
<ul>
@foreach($users as $user)
    <li>
        <h2>{{$user->name}}</h2>
        <h4>{{$user->address->country}}</h4>

    </li>
@endforeach
</ul>

<h1>Address List</h1>
<ul>
@foreach($addresses as $address)
    <li>
        <h2>{{$address->country}}</h2>
        <h4>{{$address->user->name}}</h4>
    </li>
@endforeach
</ul>