<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use Session;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase =Purchase::all();
        return view('purchase.manage-purchase',compact('purchase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchase.create-purchase');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = new Purchase;
        $purchase->supplier_id=$request->get('supplier_id');
        $purchase->purchase_date=$request->get('purchase_date');
        $purchase->chalan_no=$request->get('chalan_no');
        $purchase->purchase_details=$request->get('purchase_details');
        $purchase->cartoon=json_encode($request->get('cartoon'));
        $purchase->cartoon_item=json_encode($request->get('cartoon_item'));
        $purchase->product_quantity=json_encode($request->get('product_quantity'));
        $purchase->product_rate=json_encode($request->get('product_rate'));
        $purchase->total_price=json_encode($request->get('total_price'));
         $purchase->grand_total_price=$request->get('grand_total_price');

         $purchase->save();
         Session::flash('msg','successfully add purchase');
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
