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
			<td>
				Id
			</td>
			<td>
				<input type="text" name="aid" value="{{$admin->aid}}" readonly>
			</td>
		</tr>
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="name" value="{{$admin->name}}" readonly>
			</td>
		</tr>
		<tr>
			<td>
				User Name
			</td>
			<td><input type="text" name="username" value="{{$admin->username}}" readonly></td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="text" name="email" value="{{$admin->email}}" readonly></td>
			</td>
		</tr>
		<tr>
			<td>
				Type
			</td>
			<td><input type="text" name="type" value="{{$admin->type}}" readonly></td>
		</tr>
		<tr>
			<td>
				<a href="{{route('admin.edit', [$admin->aid])}}">Edit</a>
			</td>
			<td>
				<a href="{{route('admin.destroy', [$admin->aid])}}">Delete</a>
			</td>
		</tr>
	</table>
</form>
</body>
</html>