<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
	<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
input[type=submit] {
  background-color: blue;
  border: none;
  color: white;
  padding: 12px 30px;
  text-decoration: none;
  margin: 4px 7px;
  cursor: pointer;
}
body {
  background-color: lightblue;
}
</style>
</head>
<body>
	<h1 align="center">Edit Account</h1>

	<a href="{{route('admin.index')}}">Back to List</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

<form method="post">
	{{ csrf_field() }}

	<table align="center">
		<tr>
			<td>First Name</td>
			<td><input type="text" name="accNo" value="{{$acc['firstname']}}"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="accName" value="{{$acc['lastname']}}"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="balance" value="{{$acc['email']}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="typeId" value="{{$acc['password']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Create"></td>
		</tr>
	</table>
</form>
</body>
</html>