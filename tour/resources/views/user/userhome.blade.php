
<html>

	<head>
		<title>Intelligent Tourist Guide|Admin</title>
		<style>
			input[type=text] {
  width: 50%;
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
		body{background-color: white;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
		h2{color: green;}
		.button {
		    background-color: blue;
		    border: none;
		    color: white;
		    padding: 5px 60px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
		    border-radius: 5px;
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
		</style>
	</head>
	<body>
	<form method="post">
		{{@csrf_field()}}
	<table border="1"width="1340" height="700">
		<tr>
			<td class="header">
				<div align="center">
		  <img src="/images/logo2.jpg" alt="Logo" width="250" >
			<h1>Welcome to {{ Session::get('uname')}}</h1>
		  </div>
			<div align=" right">

		</div>
			</td>
		</tr>
		<tr>
			<td align= 'center' class="midBody">
				<label>Comment Box:<input type="text" name="comment"></label><br>
				<div>
					<input type="submit" name="submit" value="Submit">
				</div>
				
				<table align="left">
			<tr>

			<td>
				<fieldset>
					<legend><h1>Account</h1></legend>
					<ul>
			<li> <a  href="{{route('user.userprofile')}}">My Profile</a></li>
			<li> <a  href="#" >Comment</a></li>
			<li> <a  href="{{route('logout.index')}}" >Logout</a></li>
			</ul>
				</fieldset>

			</td>
			</tr>
	</table>
</form>
	</body>
</html>
