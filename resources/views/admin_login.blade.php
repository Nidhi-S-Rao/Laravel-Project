<html>
<title>Admin login</title>
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
    background-image: url("add.jpg");
    background-repeat: repeat;
    width:100%;
  }
.container{
    border-radius:10px;
    background-color:lightblue;
    width: 350px;
    margin-top: 100px;
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
    width:200px;
    padding:10px;
    margin:5px;
    border: 4px solid black;
}
button{
}
h2
{
  background-color: black;
  width:300px;
}
</style>
</head>
<body><center>
  <h2 style="color: white;margin-top: 20px;">Admin Login &nbsp<image src="ad2.jpg" width="70px"/></h2>
  </center>
  
<div class='container'>
<div class='row'>
<div class='col-sm-4'>
</div>
<div class='col-sm-4'>
<form action="/admin_login" method='post'>
@csrf
<table align='center'>

@csrf
<tr><td><input type='text' name='loginid' placeholder='UserName'/></td></tr>
<tr><td><input type='password' name='pass' placeholder='Password'/></td></tr>
<tr><td><input type='submit' value='Submit'/></td></tr>
<!--<tr><td><a href='/register'>Forgot Password</a></td></tr>-->
<table>
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
<div class='col-sm-4'>
</div>
</div>
</div>
</body>
</html>