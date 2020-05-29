<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<table border="1" style="width: 100%">
		<tr>
			<th>User Name</th>
		</tr>
		@foreach($adminList as $admin)
		
		<tr>
			<td><a href="{{route('admin.show', [$admin->aid])}}">{{$admin->name}}</a></td>
		</tr>
		@endforeach

	</table>
</body>
</html>