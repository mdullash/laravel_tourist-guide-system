<!DOCTYPE html>
<html>
<head>
	<title>Admin Details</title>
</head>
<body>
	<h1>Admin Details</h1>

	<a href="{{route('admin.index')}}">Back to List</a> |
	<!--<a href="{{route('account.edit', $account['accId'])}}">Edit</a> |
	<a href="{{route('account.delete', $account['accId'])}}">Delete</a> |-->
	<a href="{{route('logout.index')}}">Logout</a> 


	<table>
		<tr>
			<td>First Name:</td>
			<td>{{$account['firstname']}}</td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td>{{$account['lastname']}}</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>{{$account['email']}}</td>
		</tr>
		<tr>
			<td>Account Type:</td>
			<td>{{$account['type']}}</td>
		</tr>
		
	</table>
</body>
</html>