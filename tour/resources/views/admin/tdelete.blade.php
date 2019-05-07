<!DOCTYPE html>
<html>
<head>
	<title>Admin Details</title>
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
  background-color: red;
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
	<h1 align="center">Admin Delete</h1>

	<a href="{{route('admin.index')}}">Back to List</a> |
	<a href="{{route('logout.index')}}">Logout</a>

	<table align="center">
		<tr>
			<td>From:</td>
			<td>{{$acc['fromm']}}</td>
		</tr>
		<tr>
			<td>Where:</td>
			<td>{{$acc['wheree']}}</td>
		</tr>
		<tr>
			<td>Date</td>
			<td>{{$acc['cdate']}}</td>
		</tr>
		<tr>
			<td>Person:</td>
			<td>{{$acc['travellers']}}</td>
		</tr>
		<tr>
			<td>Name:</td>
			<td>{{$acc['name']}}</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>{{$acc['email']}}</td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td>{{$acc['phone']}}</td>
		</tr>
		<tr>
			<td>Ticket No:</td>
			<td>{{$acc['ticketno']}}</td>
		</tr>
		<tr>
			<td>cost:</td>
			<td>{{$acc['cost']}}</td>
		</tr>
	</table>
	<div align="center">
	<h2>Are you sure?</h2>
	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" name="accId" value="{{$acc['id']}}">
		<input type="submit" name="confirm" value="Confirm">
	</form>
</div>
</body>
</html>
