<!DOCTYPE html>
<html>
<head>
	<title>Ticket Details</title>
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
.btn {
  background-color:Red;
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
	<h1 align="center">Ticket Booking</h1>

	<a href="{{route('tour.index')}}">Back to home</a>


<form method="post">
	{{ csrf_field() }}

	<table align="center">
		<tr>
			<td>From</td>
			<td><input type="text" name="fromm" value="{{$acc['fromm']}}"></td>
		</tr>
		<tr>
			<td>Where</td>
			<td><input type="text" name="wheree" value="{{$acc['wheree']}}"></td>
		</tr>
		<tr>
			<td>Date</td>
			<td><input type="date" name="cdate" value="{{$acc['checkin']}}"></td>
		</tr>
		<tr>
			<td>Travelers</td>
			<td><input type="text" name="travellers" value="{{$acc['person']}}"></td>
		</tr>
    <td>Name</td>
    <td><input type="text" name="name" ></td>
  </tr>
  <tr>
  <td>Email</td>
  <td><input type="text" name="email" ></td>
</tr>
<tr>
<td>Phone</td>
<td><input type="text" name="phone" ></td>
</tr>
<tr>
      <td>Bus Name</td>
      <td><input type="text" name="bname" ></td>
    </tr>
<tr>

<td>Ticket Number</td>
<td><input type="text" name="ticketno" ></td>
</tr>
<tr>
<td>Cost</td>
<td><input type="text" name="cost" value="{{$acc['cost']}}"></td>
</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Create"></td>
		</tr>
	</table>
</form>
<a class="btn" href="{{route('tour.verify')}}">Payment</a>
</body>
</html>
