<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<body>

<h1>Client Management System</h1>

<a href="{{route('registration.index')}}">Registration</a>


	<h1>Login Page</h1>

	<form method="post">
        {{-- @csrf --}}
       {{--  {{csrf_field()}} --}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >

		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
    {{session('msg')}}

</body>
</html>