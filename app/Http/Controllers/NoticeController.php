<?php

namespace App\Http\Controllers;

use App\notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("notice");
    }

    public function index2()
    {
        //
        return view("update_notice");
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
    public function store(Request $request,$id)
    {
        //


        $validatedData = $request->validate([
            'title' => 'required|max:35',

            'dept'=>'required',
            'description'=>'required|max:10255',
        ]);

        $notice=new notice();
        $notice->title=$request->title;
        $notice->notice=$request->description;
        $notice->department=$request->dept;
        $notice->images=$request->image;
        $notice->links=$request->link;
        $department=$notice->department;
        $notice->save();
        echo "<script>alert('Notice updated successfully');</script>";
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
       
        return view("Go Home",['department'=>"$department"],['id'=>"$id"]);
        echo "<div class='col-sm-4'></div></div></div>";
        
        

        }
    
    
public function store1(Request $request)
{
   //validate
  
    /**
     * Display the specified resource.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
}
    public function show(notice $notice)
    {
        //

        $notice=notice::where('department','General')->get();
        return view('display_notice',["notice"=>$notice]);
        
    }


    public function show1(notice $notice,$dept)
    {
        //

        $notice=notice::where('department',$dept)->get();
        return view('dept_notice',["notice"=>$notice]);

        
    }
    public function show2(notice $notice,$dept)
    {
        //

        $notice=notice::where('department',$dept)->get();
        return view('up_dept_notice',["notice"=>$notice]);

        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(notice $notice,$id)
    {
        //

        $notice=notice::find($id);
        return view('update_info',["id"=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $users1=notice::find($id);
        $users1->title=$request->title;
        $users1->links=$request->links;
        $users1->notice=$request->description;
        //$employee->address=$request->emp_address;
        $users1->save();
        echo "<script>alert('Notice Updation complete $request->title');</script>";
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(notice $notice,$id)
    {
        //
        notice::find($id)->delete();
        echo "Record deleted successfully";
    }
}
