<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TodoController extends Controller
{
    public function todolistinsert(Request $r,$food_name){

        DB::table("todolist")->insert([

            'food_name' => $food_name
        ]);
    }

    public function getdata(){

        $data = DB::table("todolist")->get();
        return view("getdata",compact('data'));
    }
    public function deletedata($id){

        DB::table("todolist")->where('id',$id)->delete();
    }  
    public function editdata($id){

        $data = DB::table("todolist")->where('id',$id)->first();
        return view("editdata",compact('data'));
    }

    public function todolistupdate(Request $r,$food_name,$id){

        DB::table("todolist")->where('id',$id)->update([

            'food_name' => $food_name

        ]);
    }   
    
}
