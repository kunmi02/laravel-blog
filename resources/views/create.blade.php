<html>
<body>
<h1>Create User</h1>
<?php
 echo Form::open(array('url' => 'foo/bar'));

 echo Form::text('username','Username');
 echo '<br/>';
 
 echo Form::text('email', 'example@gmail.com');
 echo '<br/>';

 echo Form::password('password');
 echo '<br/>';
 
 echo Form::checkbox('name', 'value');
 echo '<br/>';
 
 echo Form::radio('name', 'value');
 echo '<br/>';
 
 echo Form::file('image');
 echo '<br/>';
 
 echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
 echo '<br/>';
 
 echo Form::submit('Click Me!');
echo Form::close();
?>
@section('main')
<h1>Edit User</h1>

<ul>
<li>
{{ Form::label('username', 'Username:') }}
{{ Form::text('username') }}
</li>
<li>
{{ Form::label('password', 'Password:') }}
{{ Form::text('password') }}
</li>
<li>
{{ Form::label('email', 'Email:') }}
{{ Form::text('email') }}
</li>
<li>
{{ Form::label('phone', 'Phone:') }}
{{ Form::text('phone') }}
</li>
<li>
{{ Form::label('name', 'Name:') }}
{{ Form::text('name') }}
</li>

</ul>
</body>
<html>