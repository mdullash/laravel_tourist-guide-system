<!DOCTYPE html>
<html>
<head>
	<title>Admin|Intelligent Tourist Guide</title>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: gray;
  color: white;
}

body {
  background-color: lightblue;
}
.button1 {
  background-color: blue;
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
.button2 {
  background-color: red;
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}


</style>
</head>
<body>
	<div align="center">
		<h1>Admin Panel</h1>
		<h1>Welcome to {{ Session::get('uname')}}</h1>
	</div>

	<div>
		<a href="{{route('admin.create')}}">New Admin</a> |
		<a href="{{route('admin.show')}}">Admin-List</a> |
		<a href="{{route('admin.userlist')}}">User-List</a> |
		<a href="{{route('admin.usercomment')}} ">User-Comment</a> |
		<a href="{{route('admin.flight')}}">Flight</a> |
		<a href="{{route('admin.package')}}">Package</a> |
		<a href="{{route('admin.ticket')}}">Ticket show</a> |
		<a href="{{route('admin.busticket')}}">Bus</a> |
		<a href="{{route('admin.pay')}}">Payment</a> |
		<a href="{{route('admin.destination')}}">Destination</a> |
		<a href="{{route('admin.livesearch')}}">Usercomment</a> |
		<a href="{{route('admin.contact')}}">Contact</a> |
	  <a href="{{route('admin.about')}}">About</a> |
		<a href="{{route('logout.index')}}">Logout</a><br><br>
	</div>
	<form>


			<table border="2">
				<tr>
					<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Type</th>
				<th>Action</th>
				</tr>
				 @foreach($admins as $acc)
				<tr>
				<td>{{$acc['id']}}</td>
				<td>{{$acc['firstname']}}</td>
				<td>{{$acc['lastname']}}</td>
				<td>{{$acc['email']}}</td>
				<td>{{$acc['type']}}</td>
				<td>
					<a class="button1" href="{{route('admin.edit', $acc['id'])}}">Edit</a>|
					<a class="button2" href="{{route('admin.delete', $acc['id'])}}">Delete</a>
				</td>
			</tr>
			@endforeach
			</table>


	</form>
</body>
</html>
