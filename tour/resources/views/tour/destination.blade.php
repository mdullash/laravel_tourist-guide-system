<!DOCTYPE html>
<html>
<head>
	<title>Destination|Intelligent Tourist Guide</title>
</head>
<body>
	@foreach($destinations as $acc)
  
	<div>
		<h1 style="color:blue" align="center">
		{{$acc['name']}}
	  </h1>
	  <p>
	  	{{$acc['details']}}
   
	  </p>
	</div>
	@endforeach

</body>
</html>