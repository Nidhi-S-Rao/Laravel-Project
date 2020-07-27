<?php

namespace App\Http\Controllers;

use App\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view('admin_login');
    }





    public function store1(Request $request)
{
   //validate
   $validatedData = $request->validate([
    //'name' => 'required|max:255',
    'loginid' => 'required',
    'pass' => 'required',
]);

//get the email entered form login page
$loginid=$request['loginid'];
$password=$request['pass'];
//echo "the loginid and password entered are $loginid $password</br>";
$admin = DB::table('admins')->where('admin_id', $loginid)->first();
if($admin){
    //echo "the loginid and password extracted from entered loginid $user->email $user->password </br>";
    if($loginid===$admin->admin_id && $password===$admin->password){
        //echo "email id and password match in db</br>";
        echo "<script> alert('Welcome $admin->name');</script>";
        return view('admin_loggedin',['id'=>"$admin->id"]);
    }
    else{
        echo "<script>alert('emailid and password do not match');</script>";
        return view('admin_login');
    }
}
else{
    echo "<script>alert('user doesnt exist');</script>";
    return view('admin_login');
} 

}







 public function profile($id)
    {
        //
        return view('profile_admin',['id'=>$id]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('input_admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'admin_id'=>'required|max:20',
            'email' => 'required',
            'password' => 'required',
            'passconf'=>'required',
            'dept'=>'required',
            'phone'=>'required|max:10',
        ]);

        $admin=new admins();
        $admin->name=$request->name;
        $admin->admin_id=$request->admin_id;
        $admin->email=$request->email;
        $admin->Department=$request->dept;
        $admin->phone=$request->phone;
        $admin->password=$request->password;
        $passconf=$request->passconf;
        if($passconf===$admin->password)
        {
        $admin->save();
        echo "<script>alert('Registered Successfully');</script>";
        echo '<head>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <style>
        .container{
            border-radius:10px;
            background-color:lightblue;
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
        </style>
        </head>';
        echo "<div class='container'><div class='row'><div class='col-sm-4'></div><div class='col-sm-4'>";
        echo "<table class='table-striped'><tr><th>Admin id</th><td>$admin->admin_id</td></tr></div>";
        echo "<a href='/admin'>Go to login</a></table></div>";
        echo "<div class='col-sm-4'></div></div></div>";
        echo "<marquee>Save the id as it is used as login id for admins</marquee>";
        }
        else{
            echo "<script>alert('Passwords dont Match');</script>";
            echo "<a href='/admin_create'>Go to register</a>";
        }  
    }

public function show4(admins $admins,$id)
    {
        //

        $admins=admins::find($id);
        $department=$admins->Department;
        return view("notice",['department'=>"$department"],['id'=>"$id"]);

    }


public function show2(admins $admins,$id)
    {
        //

        $admins=admins::find($id);
        $department=$admins->Department;
        return view("update_notice",['department'=>"$department"],['id'=>"$id"]);

    }

public function back($id)
{
  return view("admin_loggedin",["id"=>$id]);
}

    /**
     * Display the specified resource.
     *
     * @param  \App\admins  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admins $admins)
    {
        //
           $user=$admins::all();
        return view('adminss',["users"=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admins  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admins $admins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$users1_id)
    {
        //
         $users1=admins::find($users1_id);
        $users1->name=$request->name;
        $users1->email=$request->email;
        $users1->password=$request->password;
        $users1->admin_id=$request->usn;
        $users1->phone=$request->phone;
        //$employee->address=$request->emp_address;
        $users1->save();
        echo "<script>alert('Profile Updation complete $request->name');</script>";
        return view('admin_loggedin',['id'=>$users1->id]);

    }
public function show3(admins $admins,$id)
    {
        //

        $admins=admins::find($id);
        $department=$admins->Department;
        if($admins)
        {
            return view("view_complaints",['department'=>"$department"],['id'=>"$id"]);
        }
        else
            return redirect()->route('/admin_loggedin')->with(['message' => 'Wrong ID!!']);
        

    }
    public function home1(admins $admins,$id)
    {
        //

        $admins=admins::find($id);
        $department=$admins->Department;
        return view("view_complaints",['department'=>"$department"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admins  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admins $admins,$id)
    {
        //

        admins::find($id)->delete();

        echo "<script>alert('Record deleted successfully')</script>";
        return redirect('/adminss');
    }
}
