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
    background-color: #4f8a8b;
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
h3
{
  background-color: #07031a;
  width:500px;
  color: white;
}
</style>
</head>

<?php
use Illuminate\Support\Facades\DB;
//echo "{$id}";
$user = DB::table('users1s')->where('id',"$id")->first();
?>
<body>
<form action='/update_user/{{$id}}' method='post'>
@csrf
<center><h3>User Details</h3></center>
<table align='center' cellpadding='10'>
<tr><th>Name</th><td><input type='text' value="{{$user->name}}" name='name'/></td></tr>
<tr><th>Email</th><td><input type='email' value="{{$user->email}}" name='email'/></td></tr>
<tr><th>USN</th><td><input type='text' value="{{$user->usn}}" name='usn'/></td></tr>
<tr><th>Phone</th><td><input type='tel' value="{{$user->phone}}" name='phone'/></td></tr>
<tr><th>Password</th><td><input type='password' value="{{$user->password}}" name='password'/></td></tr>
<tr><td><input type='submit' value='Submit'/></td></tr>
</table><center>click on submit to upadate your profile</center>

</form>
</body>
</html>