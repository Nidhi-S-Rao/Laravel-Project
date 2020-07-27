<html>
<head>
<style>
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
</style>
</head>
<body>
<table cellpadding="15pt" border="5px" align="center">
<tr>
<th>Name</th>
<th>Admin Id</th>
<th>Department</th>
<th>Email</th>
<th>Mobile number</th>
<th>Delete</th>
</tr>
@foreach ($users as $notices)
<tr>
<td>{{$notices->name}}</td>
<td>{{$notices->admin_id}}</td>
<td>{{$notices->Department}}</td>
<td>{{$notices->email}}</td>
<td>{{$notices->phone}}</td>
<td><a href="/delete_admin/{{ $notices->id }}">Delete</a></td>
</tr>
@endforeach
</table>
</form>
</body>
</html>