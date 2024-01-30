<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;

class OrderController extends Controller
{
    public function store(Request $request){
    	
    	$data=new Order;
    	$data->name= $request->name;
        #$data->email = $request->email;
        $data->station = $request->station;
        #$data->address = $request->address;
        #$data->phone = $request->phone;
        $data->serial_no = $request->serial_no;
        $data->machine_name = $request->machine_name;
        $data->maint_date = $request->maint_date;
        $data->next_date = $request->next_date;
    	$data->maint_status =$request->maint_status;
        $data->save();
        return Redirect()->route('all.orders');
    	
    }
     public function newStore(Request $request){
        
        $data=new Order;
        $data->name= $request->name;
        #$data->email = $request->email;
        $data->station = $request->station;
        #$data->address = $request->address;
        #$data->phone = $request->phone;
        $data->serial_no = $request->serial_no;
        $data->machine_name = $request->machine_name;
        $data->maint_date = $request->maint_date;
        $data->next_date = $request->next_date;
    	$data->maint_status =$request->maint_status;
        $data->save();
        
         return Redirect()->route('all.orders');
        
    }

    public function newformData(){
        $products = Product::all();
        $customers = Customer::get();
        return view('Admin.new_order',compact('products','customers'));
    }

    public function ordersData(){
        $orders = Order::all();
        return view('Admin.all_orders',compact('orders'));
    }

    public function pendingOrders(){
        $orders = Order::where('maint_status','=','0')->get();
        return view('Admin.pending_orders',compact('orders'));
    }

    public function deliveredOrders(){
        $orders = Order::where('maint_status','=','1')->get();
        return view('Admin.delivered_orders',compact('orders'));
    }
}
