<html>

<head>
<title>Register</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  function CheckDept(val){
  //var element=document.getElementById(val);
  //document.write(val)
  //ocument.write(element)
  document.getElementById("dept").value = val;
}

</script> 
<style>
.container{
    border-radius:10px;
}
th {
    color:white;
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
<body>
<div class="container p-4 bg-dark text-white">
<div class='col-md-4'>
</div>





<div class='col-md-4'>
<form action='/registration_process' method='post'>

@csrf

<table align='center'>
<tr><th>User Registraion</th></tr>

<tr><td><input type='text' name='name' placeholder='UserName'/></td></tr>
<tr><td><input type='text' name='usn' placeholder='USN'/></td></tr>
<tr><td>
<tr><td>

<select id="department"  placeholder='Department' onchange='CheckDept(this.value);'>
	<option id="None">-- Select --</option>
	<option id="ID1">BT</option>
	<option id="ID2">CSE</option>
	<option id="ID3">Civil</option>
    <option id="ID4">ECE</option>
    <option id="ID5">EEE</option>
    <option id="ID5">ISE</option>
    <option id="ID7">Mech</option>
</select>
<input type="text" name="dept" id="dept"/>
</td></tr>

<tr><td><input type='mail' name='email' placeholder='Email'/></td></tr>
<tr><td><input type='tel' name='phone' placeholder='Mobile number'/></td></tr>
<tr><td><input type='password' name='password' placeholder='Password'/></td></tr>
<tr><td><input type='password' name='passconf' placeholder='Confirm Password'/></td></tr>
<tr><td><input type='submit' value='Submit'/></td></tr>
<tr><td>Go to <a href='/login'>Login</a></td></tr>
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

</body>
</html>