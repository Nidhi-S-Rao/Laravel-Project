<html>
<title>Register</title>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
  function CheckDept(val){
  //var element=document.getElementById(val);
  //document.write(val)
  //ocument.write(element)
  document.getElementById("dept").value = val;
}
</script>
<style>
  body
  {
    background-color: #342b38;
  }
.container{
    border-radius:10px;
    background-color:lightblue;
    width: 700px;
}

th {
    color:gray;
    font-style:italic;
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
h1
{
color: black;
background-color: #4cd3c2;
width: 700px;
border-radius: 10px;
}
</style>

</head>
<?php
use Illuminate\Support\Facades\DB;
//echo "{$id}";
$user = DB::table('admins')->where('Department',"$department")->first();
$dept=$user->Department;
$us = DB::table('admins')->where('id',"$id")->first();

?>
<body><center>
  <h1> NOTICE</h1><br><br>
</center>
<div class='container'>
<div class='row'>
<div class='col-sm-4'>
</div>

<div class='col-sm-4'>

<form action='/notice_store/{{$us->id}}' method='post'>
<table align='center'>
@csrf

<tr><td><input type='text'id='title' name='title' placeholder='Title'/></td></tr>

<tr><td><input type='url' name='link' placeholder='Link'/></td></tr>
<tr><td>

<select id="department"  placeholder='Department' onchange='CheckDept(this.value);'>
	<option id="None">-- Select --</option>
	<option id="ID1">{{$user->Department}}</option>
<input type="text" name="dept" id="dept"/>
</td></tr>
<tr><td><textarea name="description" id="description" placeholder="Description" row="10" col=10000></textarea></td></tr>

<tr><td><input type='submit' value='Submit'/></td></tr>
</table>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<div class='col-sm-4'>
</div>
</div>
</div>
</body>
</html>