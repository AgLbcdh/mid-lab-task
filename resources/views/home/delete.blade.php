<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <h1>Delete User</h1>
    <a href="/home/userlist"> Back</a>
			<table>
				<tr>
					<td>Name: </td>
					<td>{{$user['name']}}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{{ $user['username']}}</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>{{ $user['password']}}</td>
				</tr>
                <tr>
					<td>Email</td>
					<td>{{ $user['email'] }}</td>
				</tr>
				<tr>
					<td>Country</td>
					<td>{{ $user['country'] }}</td>
				</tr>

				<tr>
					<td>Phone</td>
					<td>{{ $user['phone'] }}</td>
				</tr>
				<tr>
					<td>City</td>
					<td>{{ $user['city'] }}</td>
				</tr>
				<tr>
					<td>Comapny Name</td>
					<td>{{ $user['company_name'] }}</td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>{{ $user['user_type'] }}</td>
				</tr>
				<tr>
					<td>Date Added</td>
					<td>{{ $user['date_added'] }}</td>
				</tr>
				<tr>
					<td>
						<h3>Are you sure?</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<form method="post">
							@csrf
							<input type="submit" name="submit" value="Confirm">
						</form>
					</td>
					<td></td>
				</tr>
			</table>
</body>
</html>