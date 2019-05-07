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
  <div align="center">
    <h1>User Panel</h1>
  </div>
  <form>
    <a href="{{route('user.profile')}}">My Profile</a> |
    <a href="{{route('user.editprofile')}}">Edit Profile</a> |
    <a href="{{route('user.comment')}}">Comment</a> |
    <a href="{{route('logout.index')}}">Logout</a><br><br>
  

          
     
       
      
  </form>
</body>
</html>
