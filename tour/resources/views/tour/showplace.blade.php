<!DOCTYPE html>
<html>
<head>
	<title>Place Search</title>
	<style type="text/css">
		input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

	</style>
</head>
<body>
	<h1 style="color:blue;" align="center">Place Search</h1>
	<div class="form-field">
         	<form method="post" class="search-destination">
                  {{ csrf_field() }}
         	<input type="text" name="name" placeholder="Search for place">
	 <input type="submit" name="submit" value="Search" class="form-control btn btn-primary">
	</form>
  </div>
</body>
</html>