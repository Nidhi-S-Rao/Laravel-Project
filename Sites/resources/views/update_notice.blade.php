<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
.container{
    border-radius:10px;
}
th {
    color:white;
}
header{
    font-style:italic;
    color:gray;
}
a{
    color:green;
}
td{
    color:white;
}
input{
    border-radius:10px;
    width:100%;
    padding:10px;
    margin:5px;
}
button{
}
</style>
</head>

<?php
use Illuminate\Support\Facades\DB;
//echo "{$id}";
$user = DB::table('notices')->where('department',"$department")->first();
$dept=$user->department;
?>
<body>
<form action='/up_dept_notice/{{$dept}}' method='post'>
@csrf
<center><header><h3>Update Department notices</h3></header></center>
<table align='center' cellpadding='10'>
<tr><td><input type='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>