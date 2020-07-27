<?php

namespace App\Http\Controllers;

use App\users1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        //
        //return($request);
        //validate
        $validatedData = $request->validate([
            'usn' => 'required|max:10',
            'name' => 'required|max:255',
            'dept' => 'required',
            'email' => 'required',
            'phone' => 'required|max:10',
            'password' => 'required',
            'passconf'=>'required',
        ]);

        $user=new users1();
        $user->usn=$request->usn;
        $user->name=$request->name;
        $user->Department=$request->dept;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=$request->password;
        $passconf=$request->passconf;
        if($passconf===$user->password)
        {
        $user->save();
        echo "<script>alert('Registered Successfully');</script>";
        echo "<a href='/logins'>Go to login</a>";
        }
        else{
            echo "<script>alert('Passwords dont Match');</script>";
            echo "<a href='/register_please'>Go to register</a>";
        }  
    }

    public function store(Request $request)
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
        $user = DB::table('users1s')->where('email', $loginid)->first();
        if($user){
            //echo "the loginid and password extracted from entered loginid $user->email $user->password </br>";
            if($loginid===$user->email && $password===$user->password){
                //echo "email id and password match in db</br>";
                //echo "<script> alert('Welcome $user->name');</script>";
                return view("loggedin",['id'=>"$user->id"]);
            }
            else{
                echo "<script>alert('emailid and password do not match');</script>";
                return view('login');
            }
        }
        else{
            echo "<script>alert('user doesnt exist');</script>";
            return view('login');
        }
        /*
        //find the user of email
        $users2=users1::where('email',"$loginid")->get();
        if($users2){
        //convert the user value returned to key value pairs
        $users2=$users2[0];
        //get the value of the users key
        $pass=$users2['password'];
        echo"$pass";
        $email=$users2['email'];
        echo "$email";
        if(($email==$request['loginid']) && ($pass==$request['password']))
        {
            echo "<script>alert('welcome $email');</script>";
        }
        else
        {
            echo "<script>alert('Password or username wrong');</script>";
        }
    }
    else{
        echo "no such user";
    }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\users1  $users1
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        //
        return view('profile',['id'=>$id]);
    }
    public function show(users1 $users1)
    {
        //
        $user=$users1::all();
        return view('users',["users"=>$user]);
    }
    
    public function show1(users1 $users1,$id)
    {
        //

        $user=users1::find($id);
        $department=$user->Department;
        return view("display_notice_dept",['department'=>"$department"]);

       

        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\users1  $users1
     * @return \Illuminate\Http\Response
     */
    public function edit($users1)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\users1  $users1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $users1_id)
    {
        //
        $users1=users1::find($users1_id);
        $users1->name=$request->name;
        $users1->email=$request->email;
        $users1->password=$request->password;
        $users1->usn=$request->usn;
        $users1->phone=$request->phone;
        //$employee->address=$request->emp_address;
        $users1->save();
        echo "<script>alert('Profile Updation complete $request->name');</script>";
        return view('loggedin',['id'=>$users1->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\users1  $users1
     * @return \Illuminate\Http\Response
     */
    public function destroy(users1 $users1,$id)
    {
        //
       users1::find($id)->delete();
        echo "Record deleted successfully";
    }
}
