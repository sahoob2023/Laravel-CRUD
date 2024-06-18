<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Customercontroller extends Controller
{
    public function index(){
        return view('form');
    }
    public function store(Request $request){

        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';

            $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = $request['password'];
        $customer->save();
        

        return redirect('/customer/view');
    }

    public function view(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $newcustomer = Customer::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
         } else{

             $newcustomer = Customer::paginate(10);
        }
        // echo "<pre>";
        // print_r($newcustomer);
        // echo "</pre>";
        // $customers = new Customer;

        
        $data = compact('newcustomer','search');
        return view('customer-view')->with($data);
        
    }

    public function destroy($id){
        $object = Customer::find($id);
        $object->delete();
        return redirect()->back();
    }

    public function edit($id){
        $object = Customer::find($id);
        $data = compact('object');
        return view('update')->with($data);
    }

    public function update($id , Request $request){
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = $request['password'];
        $customer->save();

        return redirect()->route('view');
 
    }
}
