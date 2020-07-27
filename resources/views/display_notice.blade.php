
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
	color: #4f8a8b;
	width:400px;
}
a
{
 background-color:#342b38 ;
 color: white;

}
h1
{
	background-color: black;
	color: white;
	width: 300px;
	border-radius: 10px;
	height: 50px;
}
</style>
</head>
<body><center>
	<div style="background-color: #342b38; width: 500px;border-radius: 10px;margin-top: 100px;">
	<h1 > GENERAL NEWS</h1>

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
</table><br><br></div></center><br><br><br><center>


</center>

</body>


</html>