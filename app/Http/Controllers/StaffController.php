<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
// {

//     public function customersData(){
//     	$customers = Customer::all();
//     	return view('Admin.all_customers',compact('customers'));
//     }

//     public function update($id,Request $request)
//     {
       
//         $customers =  Customer::find($id);
//         $customers->name = $request->name;
//         // $customers->email = $request->email;
//         // $customers->password = $request->password;
//         // $customers->gender = $request->gender;
//         // if($request->is_active){
//         //     $employee->is_active = 1;

//         // }
      
//         // $employee->date_of_birth = $request->date_of_birth;
//         // $employee->roll = $request->roll;

//         if($employee->save())
//         {
           
//             return redirect()->back()->with(['msg' => 1]);
//         }
//         else
//         {
//             return redirect()->back()->with(['msg' => 2]);
//         }
     
//         return view('update.customer',compact('customers'));

//     }

//     public function edit($id){
//         $customers = Customer::find($id);
//         return view('edit.customer', compact('customers'));
//     }
    
// }
{
    public function index()
    {
        $staff = new Staff();
        $staff = $staff->get();
        return view('dashbord.dashbord',[
            'staff' =>$staff
            ]);

    }

    public function edit($id)
    {
        $staff = Staff::where('id' ,'=',$id)->get();
     
        return view('staff.edit_staff',compact('staff'));

    }


    public function create()
    {
        return view('staff.create');

    }

    public function store(Request $request)
    {
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->department = $request->department;
        $staff->staff_no = $request->staff_no;
        $staff->designation = $request->designation;
        $staff->station = $request->station;
        $staff->address = $request->address;
        $staff->phone = $request->phone;

        $staff->save();
        return Redirect()->route('add.staff');
        
    }

    public function update($id,Request $request)
    {
       
        $staff =  Staff::find($id);
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->department = $request->department;
        $staff->staff_no = $request->staff_no;
        $staff->designation = $request->designation;
        $staff->station = $request->station;
        $staff->address = $request->address;
        $staff->phone = $request->phone;
        
        $staff->roll = $request->roll;

        if($staff->save())
        {
           
            return redirect()->back()->with(['msg' => 1]);
        }
        else
        {
            return redirect()->back()->with(['msg' => 2]);
        }
     
        return view('staff.edit',compact('staff'));

    }

        
    public function staffData(){
        $staffs = Staff::all();
        return view('Admin.all_staff',compact('staffs'));
    }
         
     

    public function delete($id)
    {
        $staff =  Staff::find($id);
        if($staff->delete())
        {
           
            return redirect()->back()->with(['msg' => 1]);
        }
        else
        {
            return redirect()->back()->with(['msg' => 2]);
        }

    }

}