<html>
<?php
use Illuminate\Support\Facades\DB;

?>
<head>
<style>
	body
	{
		background-color: #8ccbbe;
	}
table{
	
	border-collapse:collapse;
	cellspacing="5pt" ;
	  cellpadding="5pt";
	  border="5px";
	  align="center";
	  
}
tbody tr:nth-child(odd){
	background-color:#008080;
	text-color:white;
	
	
}
tbody tr:nth-child(even){
	background-color:#e6dbdc;
	text-color:white;
	
	
}
tbody tr:hover
{
	background-color:#da3559;
}
h1
{
	background-color: #07031a;
	color: white;
	width:400px;
}
a
{
	background-color: white;
	color:green;
	border-radius: 10px;
}
</style>
</head>
<body>
	<center>
		<div style="background-color: #342b38; width: 500px;border-radius: 10px;margin-top: 100px;">
  <h1 > Department News</h1>
<table cellpadding="15pt" border="5px" align="center">
<tr>
<th>Title</th>
<th>Description</th>
<th>Department</th>
<th>Links</th>
</tr>
@foreach ($notice as $notices)
<tr>
<td>{{$notices->title}}</td>
<td>{{$notices->notice}}</td>
<td>{{$notices->department}}</td>
<td>{{$notices->links}}</td>
</tr>
@endforeach

</center>
</div><center><br><br>


</body>
</html>