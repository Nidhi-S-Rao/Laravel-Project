<html>
<title>Register</title>


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
  body
  {
    background-color: #4f8a8b;
  }
  
.container{
    border-radius:10px;
    width: 700px;

}
th {
    color:white;
}
a{
    color:white;
    background-color: green;
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
  background-color: black;
  width: 700px;
  color: white;
  border-radius: 10px;
  margin-top: 20px;
}
</style>

<script>
    var el_down = document.getElementById("admin_id"); 
    /* Function to generate combination of password */ 
    function generateP() { 
        var name=document.getElementById('name').value;
        var pass = ''; 
        var str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' +  
                'abcdefghijklmnopqrstuvwxyz0123456789@#$'; 
          
        for (i = 1; i <= 8; i++) { 
            var char = Math.floor(Math.random() 
                        * str.length + 1); 
              
            pass += str.charAt(char) 
        }
        name=name.split(' ');
        pass=name[0]+'@'+pass; 
        return pass; 
    } 
    function gfg_Run() { 
            document.getElementById('admin_id').value = generateP(); 
        } 
/*function create()
{
    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        var string_length = 8;
        var randomstring = '';
        for (var i=0; i<string_length; i++) {
            var rnum = Math.floor(Math.random() * chars.length);
            randomstring += chars.substring(rnum,rnum+1);
        }
    document.write(name+'@'+randomstring);
    //document.setElementById('admin_id').value=name+'@'+randomstring;
}*/
</script>
</head>
<body>
  <center><h3 align="center">PLEASE REGISTER HERE &nbsp &nbsp<image src="re.png" width="100px"/></h3>
  </center>
  
<div class="container p-4 bg-dark text-white">
<div class='col-md-4'>
</div>





<div class='col-md-4'>
<form action='/display_admin' method='post'>
<table align='center'>
@csrf
<tr><th>Admin Register</th></tr>
<tr><td><input type='text'id='name' name='name' placeholder='UserName'/></td></tr>
<tr><td><input type='text' id='admin_id' name='admin_id' placeholder='Admin id' onmousedown='gfg_Run();'/></td></tr>
<tr><td><input type='mail' name='email' placeholder='Email'/></td></tr>
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
    <option id="ID8">General</option>
</select>
<input type="text" name="dept" id="dept"/>
</td></tr>
<tr><td><input type='tel' name='phone' placeholder='Mobile number'/></td></tr>
<tr><td><input type='password' name='password' placeholder='Password'/></td></tr>
<tr><td><input type='password' name='passconf' placeholder='Confirm Password'/></td></tr>
<tr><td><input type='submit' value='Submit'/></td></tr>
</table>
<marquee style='color:red;'>*Please note that the admin id is created by default and is used as admin id for admins.</marquee>
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