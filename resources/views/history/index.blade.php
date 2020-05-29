<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

<table border="1" style="width: 100%">
	<tr>
		<!--<th>Time</th>-->
		<th>Food Name</th>
		<th>Area</th>
		<th>Price Range</th>
	</tr>
	@foreach($history as $h)
		<tr>
			<td>
				{{$h->hid}}
			</td>
			<td>
				{{$h->area}}
			</td>
			<td>
				{{$h->foodName}}
			</td>
			<td>
				{{$h->price}}
			</td>
		</tr>
	@endforeach
</table>
</body>
</html>