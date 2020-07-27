<?php

namespace App\Http\Controllers;

use App\complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('complaint_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'comments' => 'required|max:255',

            'dept'=>'required',
            
        ]);

        $notice=new complaint();
        $notice->stu_name=$request->name;
        $notice->Complaint=$request->comments;
        $notice->department=$request->dept;
       
        $notice->save();
        echo "<script>alert('Comments registered successfully');</script>";
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
        echo "<div class='col-sm-4'></div></div></div>";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function show(complaint $complaint,$dept)
    {
        //
        $notice=complaint::where('department',$dept)->get();
        return view('only_dept',["notice"=>$notice]);
    }
 public function show2(complaint $complaint)
 {
     return view('database');
 }    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(complaint $complaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, complaint $complaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(complaint $complaint,$id)
    {
        //
        complaint::find($id)->delete();
        echo "Record deleted successfully";
    }
}
