<html>
<?php 
use Illuminate\Support\Facades\DB;
$admin = DB::table('admins')->where('id',"$id")->first();
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
  body
  {
background-color: #8ccbbe;
  }
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
    background-color: black;
    width: 300px;
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
.abc
{
  background-color: #584153;
  font-style: 
   border-radius: 20px;
   font-size: 20px;
   width:500px;


}
.abc2
{
  background-color: #584153;
  font-style: 
   border-radius: 20px;
   font-size: 20px;
   width:700px;


}

</style>
</head>
<body>
<marquee><h2><b style="background:gray; color:black;"> DEPARTMENT:{{$admin->Department}}</h2></b></marquee>
<header>
<center><h3>Online Notice board</h3></center>

<!-- add bootstrap image movement -->
<nav class="navbar navbar-expand-sm bg-#8ccbbe">

  <!-- Links -->
  <ul class="navbar-nav">
  
    <li class="nav-item">
    <div class="dropdown">
        <image src="stu.jpg" width="50px"/>&nbsp <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            {{$admin->name}}
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/profile_admin/{{$id}}">Profile</a>
            <a class="dropdown-item" href="/logout1">Logout</a>
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
      <image src="news.jpg" width="70px"/>&nbsp
    <button type="button" style='width:100px;height:35px;' class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    Categories</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/news_add/{{$id}}" name='news_add'>Add news</a>
      
      <a class="dropdown-item" href="/update_news/{{$id}}" name='news_update'>Update news</a>
    </div>
  </div>
</div>
<div class='col-sm-8'>

<marquee>
<p style='font-style:italic;color:red;'><image src="co.jpg" width="80px"/>&nbsp<b> *Be updated about COVID-19 with AarogyaSethu App</b> &nbsp<image src="ar.jpg" width="80px"/>&nbsp</p>
</marquee>

</div>
<div class='col-sm-2'>
<a class='btn btn-primary' href='/complaint_view/{{$id}}' name='complaint'>Complaints</a>
<image src="comp.png" width="50px"/>&nbsp
</div>
</div>
</div>
</section>
<footer style=''>
<div class='container'>
<div class='row'>
<div class='col-sm-4'>
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Contacts</h2><i>
<p class="abc">Phone:+91-8258-281263 / 281264 &nbsp &nbsp &nbsp &nbsp<br>
Website:<a href="www.nmamit.nitte.edu.in">Click here</a></p></i>
</div>
<div class='col-sm-4'>
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Address</h2>
<p class="abc2"><i>NMAM Institute of Technology, Nitte-574110</br>
   Karkala Taluk,Udupi dist,Karnataka</i>
</p> 
</div>
</div class='col-sm-4'>
</div>
</div>
</footer>
</footer>
</body>
</html>