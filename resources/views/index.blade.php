@section('main')
<h1>All Users</h1>
<p><a href="{{route('users.create')}}">Add new User</a></p>

<table class="table table-striped table-bordered">
	<thead>
<tr>
<th>Username</th>
<th>Password</th>
<th>Email</th>
<th>Phone</th>
<th>Name</th>
</tr>
</thead>
<tbody>
@foreach ($users as $user)
<tr>
<td>{{ $user->username }}</td>
<td>{{ $user->pasword }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->phone }}</td>
<td>{{ $user->name }}</td>
<td>
<a href = 'edit/{{ $user->id }}'>Edit</a>
</td>
<td>

</td>
</tr>
@endforeach
</tbody>
</table>
