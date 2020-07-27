<html>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
  body
  {
    background-color: #aacdbe;
  }
  table
  {
    background-color: #342b38;
    border-radius: 10px;
  }
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
//echo "{$id}";4
$us = DB::table('admins')->where('id',"$id")->first();
$user = DB::table('notices')->where('id',"$id")->first();

?>
<body>

<form action='/update_info/{{$id}}' method='post'>
@csrf
<center>
  <header><h3 style="background-color: black;border-radius: 10px;width:300px;height: 50px;">Update information</h3></header></center>

<table align='center' cellpadding='10'>
<tr><th>Name</th><td><input type='text' value="{{$user->title}}" name='title'/></td></tr>
<tr><th>Link</th><td><input type='text' value="{{$user->links}}" name='link' placeholder="Link(if any)"/></td></tr>
<tr><th>Notice</th><td><textarea  placeholder="{{$user->notice}}" name="description" row="10" col=10000></textarea></td></tr>
<tr><td></td><td><input type='submit' value='Submit'/></td></tr>

</table>

</form>

</body>
</html>