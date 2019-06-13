<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View all user details</title>
</head>
<body>
<h1>All Users</h1>
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
@endforeach
</tbody>
</table>
</body>
</html>