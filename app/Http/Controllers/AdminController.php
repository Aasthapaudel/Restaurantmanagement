<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\foodchef;
use App\Models\Cart;
use App\Models\Order;
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
    public function deletemenu($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
        // return view('admin.users',compact('data'));
    }
    public function updatemenu($id)
    {
        $data=food::find($id);
        // $data->delete();
        // return redirect()->back();
        return view('admin.updatemenu',compact('data'));
    }
    public function foodmenu()
    {
        $data=food::all();

        // $data=user::find($id);
        // $data->delete();
        // return redirect()->back();
        return view('admin.foodmenu',compact('data'));
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
    public function update(Request $request,$id){
$data=food::find($id);
$image=$request->image;
$imagename=time().'.'.$image->getClientOriginalExtension();
$request->image->move('foodimage',$imagename);
$data->image=$imagename;
$data->title=$request->title;
$data->price=$request->price;
$data->description=$request->description;
$data->save();
return redirect()->back();

    }


    public function reservation(Request $request)
    {
         $data=new reservation;
// $image=$request->image;
// $imagename=time().'.'.$image->getClientOriginalExtension();
// $request->image->move('foodimage',$imagename);
// $data->image=$imagename;
$data->name=$request->name;
$data->email=$request->email;
$data->phone=$request->phone;
$data->guest=$request->guest;
$data->date=$request->date;
$data->time=$request->time;
$data->message=$request->message;
$data->save();

        // te();
        return redirect()->back();
        // return view('admin.foodmenu');
    }
    public function viewreservation(){
        $data=reservation::all();
        return view('admin.adminreservation',compact("data"));
    }
public function viewchef(){
    $data=foodchef::all();
    return view('admin.adminchef',compact('data'));
}
public function OrderItem(){
    $OrderItems=Cart::all();
    return view('admin.orderitem',compact('OrderItems'));
}
public function uploadchef( Request $request){
    $data=new foodchef;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('chefimage',$imagename);
    $data->image=$imagename;
    $data->name=$request->name;
    $data->speciality=$request->speciality;
    $data->save();
    return redirect()->back();

}
public function updatechef($id)
{
    $data=foodchef::find($id);
    return view("admin.updatechef",compact('data'));
}
public function updatefoodchef(Request $request ,$id)
{
    $data=foodchef::find($id);
    $image=$request->image;

    if ($image) {


    $imagename =time().'.'.$image->getClientOriginalExtension();
    $request->image->move('chefimage',$imagename);
    $data->image=$imagename;
    }
    $data->name=$request->name;
    $data->speciality=$request->speciality;
    $data->save();
    return redirect()->back();
    // return view("admin.updatechef",compact('data'));
}
public function deletechef($id){
    $data=foodchef::find($id);
    $data->delete();
    return redirect()->back();

}
public function approve($id)
{
    $order = Cart::findOrFail($id);
    $order->status = 'approved';
    $order->save();

    return redirect()->back()->with('success', 'Order approved successfully.');
}

public function cancel($id)
{
    $order = Cart::findOrFail($id);
    $order->status = 'cancelled';
    $order->save();

    return redirect()->back()->with('success', 'Order cancelled successfully.');
}
}
