<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
class AdminController extends Controller
{
    //
    public function user()
    {
        $data=user::all();
        return view('admin.users',compact('data'));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
        // return view('admin.users',compact('data'));
    }
    public function foodmenu()
    {
        // $data=user::find($id);
        // $data->delete();
        // return redirect()->back();
        return view('admin.foodmenu');
    }

    public function upload(Request $request)
    {
         $data=new food;
$image=$request->image;
$imagename=time().'.'.$image->getClientOriginalExtension();
$request->image->move('foodimage',$imagename);
$data->image=$imagename;
$data->title=$request->title;
$data->price=$request->price;
$data->description=$request->description;
$data->save();

        // te();
        return redirect()->back();
        // return view('admin.foodmenu');
    }

}