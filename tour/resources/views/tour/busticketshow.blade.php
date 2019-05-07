<!DOCTYPE html>
<html>
<head>
	<title>Admin|Intelligent Tourist Guide</title>
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
  <h1 style="color:blue" align="center">Bus Information</h1>
	<div align="center">
	</div>
	<form>
		<a href="{{route('tour.index')}}">Back to home</a>

			<table border="2">
				<tr>
				<th>From</th>
				<th>Where</th>
				<th>Person</th>
        <th>Checkin</th>
        <th>Bus Name</th>
        <th>Cost</th>
        <th>Ticket Book</th>

				</tr>
				 @foreach($buss as $acc)
				<tr>
				<td>{{$acc['fromm']}}</td>
				<td>{{$acc['wheree']}}</td>
				<td>{{$acc['person']}}</td>
        	<td>{{$acc['checkin']}}</td>
        <td>{{$acc['bname']}}</td>
				<td>{{$acc['cost']}}</td>
				<td>
					<a class="button1" href="{{route('tour.busticketinfo', $acc['id'])}}">Ticket Book</a>|

				</td>
			</tr>
			@endforeach
			</table>


	</form>
</body>
</html>
