<!DOCTYPE html>
<html>
<head>
	<title>User Edit</title>
</head>
<body>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Id</td>
			<td>{{$admin->aid}}</td>
			<input type="hidden" name="aid" value="{{$admin->aid}}">
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$admin->name}}"></td>
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="username" value="{{$admin->username}}"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="{{$admin->email}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value="{{$admin->password}}"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Save" /></td>
			<td></td>
		</tr>
	</table>
</form>
</body>
</html>