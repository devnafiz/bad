<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Balance;
use Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create-customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
         $customer= new Customer;
        $customer->name =$request->get('name');
        $customer->email =$request->get('email');
        $customer->phone =$request->get('phone');
        $customer->address =$request->get('address');
       // $data['name']=$request->input('name');
       // $data['email']=$request->input('email');
       // $data['phone']=$request->input('phone');
       // $data['address']=$request->input('address');

         //$customer->balances()->associate($request->balance);
       //$balance=$request->get('balance');
        
        $customer->save();
        $customer->balances()->create(['balance' => $request->balance]);
      //dd($customer->id);
       //$customers= Customer::findOrFail($customer->id);
       //dd($customers);
      // $customers->balances()->save($request->input('balance'));

         //$customers=Customer::create($data);
          //$balance=$request->input('balance');

       // if(0<$balance){
       //  //dd($balance);
       //   $data1['credit']=$request->input($balance);
       //   $data1['debit']='null';
       // } else{
        
       //  $data1['debit']=$request->input($balance);
       //   $data1['credit']='null';   

       // }

      //$customer->balances()->saveMany($request->balance);
     // $customer->save();
      Session::flash('msg',' succesfull add Customer');
      return back();

       
      

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
