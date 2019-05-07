<!DOCTYPE html>
<html>
<head>
	<title>Admin Details</title>
</head>
<body>
	<h1>Admin Details</h1>

	<a href="{{route('admin.index')}}">Back to List</a> |
	<!--<a href="{{route('account.edit', $account['accId'])}}">Edit</a> |
	<a href="{{route('account.delete', $account['accId'])}}">Delete</a> |
	<a href="{{route('logout.index')}}">Logout</a> 
-->

	<table>
		<tr>
			<td>ID:</td>
			<td>{{$admin['id']}}</td>
		</tr>
		<tr>
			<td>Name:</td>
			<td>{{$admin['name']}}</td>
		</tr>
		<tr>
			<td>User Name:</td>
			<td>{{$admin['username']}}</td>
		</tr>
	</table>
</body>
</html>