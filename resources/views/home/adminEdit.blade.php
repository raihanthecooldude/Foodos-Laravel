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
			<td>{{$admin->name}}</td>
			<input type="hidden" name="name" value="{{$admin->name}}">
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="username" value="{{$admin->username }}"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="{{$admin->type }}"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Save" /></td>
			<td></td>
		</tr>
	</table>
</form>
</body>
</html>