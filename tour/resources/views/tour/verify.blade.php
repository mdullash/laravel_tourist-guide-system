<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: orange;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 10px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 10px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 200px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 50%;
  }
}
</style>
</head>
<body>

<h2 align="center">Verify ticket</h2>

<form method="post">
{{ csrf_field() }}

  <div class="imgcontainer">
    <img src="/images/bkash.jpg" height="250" width="120" alt="Avatar" class="avatar">
  </div>
  <div align="center">
  <p>Merchant account number: 01837397448 Ref number:1</p>
    <p>If you do not pay in two hours,your ticket will be cancel</p>
  </div>
  <div class="imgcontainer">
    <img src="/images/download.png" height="250" width="120" alt="Avatar" class="avatar">
  </div>
  <div align="center"class="container">
    <label for="uname"><b>Transaction id</b></label>
    <input type="text" placeholder="Transaction Id" name="tid" ><br>

    <button type="submit">Verify</button><br/>

  </div>

</form>

</body>
</html>
