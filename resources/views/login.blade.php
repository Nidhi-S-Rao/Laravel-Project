<html>
<title>login</title>
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
<form action="/logging" method='post'>
@csrf
<table align='center'>
<tr><th>User Login</th></tr>
<tr><td><input type='text' name='loginid' placeholder='UserName or Emailid'/></td></tr>
<tr><td><input type='password' name='pass' placeholder='Password'/></td></tr>
<tr><td><button type='submit' class='btn btn-primary'>Submit</button></td></tr>
<tr><td>Click here to <a href='/register_please'>Register</a></td></tr>
</table>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>
</div>
<div class='col-md-4'>
</div>
</div>
</body>
</html>