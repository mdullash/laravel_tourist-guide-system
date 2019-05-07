<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
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
	<h1 align="center">User List</h1>
	<a href="{{route('admin.index')}}">Back to List</a> <br><br>
	<table border="2">
				<tr>
				<th>ID</th>
				<th>Comment</th>
				
			
				</tr>
				 @foreach($usercomments as $acc)
				<tr>
				<td>{{$acc['id']}}</td>
				<td>{{$acc['comment']}}</td>
							
			</tr>
			@endforeach
			</table>
</body>
</html>