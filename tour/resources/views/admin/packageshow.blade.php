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
	<h1 align="center">Package List</h1>
	<a href="{{route('tour.index')}}">Back to home</a> <br><br>
	<table border="2">
				<tr>
				<th>ID</th>
				<th>Package Name</th>
				<th>Package 1</th>
				<th>Package 2</th>
				<th>Package 3</th>
        <th>Action</th>
				</tr>
				 @foreach($packages as $acc)
				<tr>
				<td>{{$acc['id']}}</td>
				<td>{{$acc['pname']}}</td>
				<td>{{$acc['packageone']}}</td>
				<td>{{$acc['packagetwo']}}</td>
				<td>{{$acc['packagethree']}}</td>
				<td>
					<a class="button2" href="">Book</a>
				</td>
			</tr>
			@endforeach
			</table>
</body>
</html>
