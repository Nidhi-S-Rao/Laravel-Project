<html>
<?php 
use Illuminate\Support\Facades\DB;
$user = DB::table('users1s')->where('id',"$id")->first();
?>
<title>Online notice board</title>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
label{
    height:100%;
    width:100%;
    border-radius:5px;
    background-color:blue;
}
label a{
    color:white;
}
.row{
    text-align:center;
}
.container1{
    margin-top:5px;
    border-color:gray;
    background-color:;
}
header{
    margin-bottom:50px;
}
section table{
    background-color:gray;
}
section button{
    width:100px;
    height:35px;
    text-align:center;
}
h3{
    margin:30px;
    }
footer{
    background-color:black;
    color:white;
}
header h3{
    font-style:italic;
    color:orange;
}
img{
}
</style>
</head>
<body>
<marquee> DEPARTMENT:{{$user->Department}}</marquee>
<header>
<center><h3>Online Notice board</h3></center>
<!-- add bootstrap image movement -->
<nav class="navbar navbar-expand-sm bg-light">

  <!-- Links -->
  <ul class="navbar-nav">
  
    <li class="nav-item">
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            {{$user->name}}
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/profile/{{$id}}">Profile</a>
            <a class="dropdown-item" href="/logout">Logout</a>
        </div>
        </div>
    </li>
  </ul>

</nav>
</header>
<section>
<div class="container2">
  <div class="row">
    <div class="col-sm-2">
    <div class="btn-group">
    <button type="button" style='width:100px;height:35px;' class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    Categories</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/notices_general" name='general'>General</a>
      
      <a class="dropdown-item" href="/notices_dept/{{$id}}" name='dept'>Your department</a>
    </div>
  </div>
</div>
<div class='col-sm-8'>

<marquee>

</marquee>
<p style='font-style:italic;color:red;'>*Be updated about COVID-19 with AarogyaSethu App</p>
</div>
<div class='col-sm-2'>
<a class='btn btn-primary' href='/complaint_register' name='complaint'>Complain</a>
</div>
</div>
</div>
</section>
<footer style=''>
<div class='container'>
<div class='row'>
<div class='col-sm-4'>
<h5>Contacts</h5>
<p>Phone:+919686034913<br>
Email:<a href="mailto:hbhargavi.nayak9499@gmail.com">My mail</a></p>
</div>
<div class='col-sm-4'>
<h5>Address</h5>
<p>NMAM Institute of Technology, Nitte 574110</br>
Information Science & Engineering Department
5th floor Academic Block
</div>
</div class='col-sm-4'>
</div>
</div>
</footer>
</footer>
</body>
</html>