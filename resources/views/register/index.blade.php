<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<form name = "f1" id = "f1" method="post">
	@csrf
	<table>
		<tr>
			<td><p style="line-height: 1.6; font-family: Calibri; font-size: 20px; color: black;">Name</p></td>
			<td>: <input type="text" name="name" value="{{old('name')}}"></td>
			<td>
				<span>
					@if ($errors->has('name'))
						{{$errors->first('name')}}
					@endif
				</span>
			</td>
		</tr>
		<tr>
			<td><p style="line-height: 1.6; font-family: Calibri; font-size: 20px; color: black;">Username</p></td>
			<td>: <input type="text" name="username" value="{{old('username')}}"></td>
			<td>
				<span>
					@if ($errors->has('username'))
						{{$errors->first('username')}}
					@endif
				</span>
			</td>
		</tr>
		<tr>
			<td><p style="line-height: 1.6; font-family: Calibri; font-size: 20px; color: black;">Email</p></td>
			<td>: <input type="text" name="email" value="{{old('email')}}"></td>
			<td>
				<span>
					@if ($errors->has('email'))
						{{$errors->first('email')}}
					@endif
				</span>
			</td>
		</tr>
		<tr>
			<td><p style="line-height: 1.6; font-family: Calibri; font-size: 20px; color: black;">Password</p></td>
			<td>: <input type="password" name="password" value="{{old('password')}}"></td>
			<td>
				<span>
					@if ($errors->has('password'))
						{{$errors->first('password')}}
					@endif
				</span>
			</td>
		</tr>
		<!--<tr>-->
		<!--<td><p style="line-height: 1.6; font-family: Calibri; font-size: 20px; color: black;">Re-type Password</p></td>-->
		<!--<td>: <input type="password" name="rpassword"></td>-->
		<!--</tr>-->
		<tr>
			<td>&nbsp</td>
			<td><button type="submit" name="signup">Create User</button></td></tr>
	</table>
</form>
</body>
</html>