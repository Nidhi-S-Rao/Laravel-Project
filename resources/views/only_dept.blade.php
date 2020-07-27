<html>
<?php
use Illuminate\Support\Facades\DB;

?>
<head>
<style>
	body
	{
		background-color: #dbc6eb;
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
h2
{
	background-color: black;
	color: white;
	width: 300px;
	border-radius: 10px;
	height: 50px;
}
</style>
</head><center>

<body><center>
	<div style="background-color: #342b38; width: 500px;border-radius: 10px;margin-top: 100px;">
	<h2>Department complaints</h2><center>
<table cellpadding="15pt" border="5px" align="center">
<tr>
<th>Name</th>
<th>Department</th>
<th>Comments</th>
<th>Delete</th>
</tr>
@foreach ($notice as $notices)
<tr>
<td>{{$notices->stu_name}}</td>
<td>{{$notices->department}}</td>
<td>{{$notices->Complaint}}</td>
<td><a href="/delete_complaint/{{ $notices->id }}">Delete</a></td>
</tr>
@endforeach
</table><br><br>

</div>
</center>

</body>
</html>