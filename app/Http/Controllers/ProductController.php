<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\Supplier;
use App\Categories;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products =Products::paginate(20);

      return view('product.manage-product',compact('products'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $supplier=Supplier::all();
           $category =Categories::all();
        return view('product.product_create',compact('supplier','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['name']=$request->input('name');
        $data['p_model']=$request->input('p_model');
        $data['bar_code']=$request->input('bar_code');
        $data['category_id']=$request->input('category_id');
        $data['details']=$request->input('details');
        $data['carton_qty']=$request->input('carton_qty');
        $data['sell_price']=$request->input('sell_price');
        $data['supplier_price']=$request->input('supplier_price');
        $data['supplier']=$request->input('supplier');
        if($request->hasfile('images')){
            $destination='images/uploads/products';
            $file=$request->file('images');
            $file->move($destination,time().$file->getClientOriginalName());
            $data['image']=time().$file->getClientOriginalName();

         }else{
            $data['image']="default.jpg";
         }

         Products::create($data);
         Session::flash('msg','Succesfully  create');
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
