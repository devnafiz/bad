<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use DB;
use App\Bank_transtion;
use Session;
class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $banks=Bank::paginate(20);
        return view('bank.manage-bank',compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bank.create-bank');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banks= new Bank;
        $banks->bank_name =$request->get('bank_name');
        $banks->acc_name =$request->get('ac_name');
        $banks->acc_number =$request->get('ac_no');
        $banks->branch =$request->get('branch');
        if($request->hasfile('signature_pic')){
            $destination='images/uploads/bank';
            $file =$request->file('signature_pic');
            $file->move($destination,time().$file->getClientOriginalName());
             $banks->image =time().$file->getClientOriginalName();
        }
        else{
             $banks->image="default.png";

        }
       // dd($banks);
        $banks->save();
        Session::flash('msg','Successfully add bank information');
        return back();

    }
    /**

    tranjection store

    **/
   public function storeTrans(Request $request){

         $transtion = new Bank_transtion;
          $transtion->date=$request->get('date');
         $transtion->bank_id=$request->get('bank_id');
          
         $transtion->description=$request->get('description');
         $transtion->deposite_id=$request->get('deposite_id');
         if($request->get('account_type')){
            if("Credit(-)"==$request->get('account_type')){

           $transtion->credit=$request->get('ammount'); 
         }
         else{
             $transtion->debit=$request->get('ammount'); 
         }
     }
     //dd($request->get('account_type'));
        $transtion->save();
        Session::flash('msg','Sucessfully add balance');
        return back();
       
   }

   /**
    *banlk  ledger create




   **/

   public function bankLadger($id){
    $bank_data= Bank::with('bank_trans')->find($id);
     $bank_tran =Bank_transtion::where('bank_id','=',$id)->get();
           $debits  = DB::table('bank_trans')->select( DB::raw('SUM(debit) as amount'))->groupBy('bank_id')->where('bank_id','=',$id)->get();
           $credits  = DB::table('bank_trans')->select( DB::raw("SUM(credit) as amount"))->groupBy('bank_id')->where('bank_id','=',$id)->get();
           $balance  = DB::table('bank_trans')->select( DB::raw(" (SUM(debit*-1) + sum(credit)) as amount"))->groupBy('bank_id')->where('bank_id','=',$id)->get();
    //dd($balance);
       
   return view('bank.bank-ladger',compact('bank_data','bank_tran','debits','credits','balance')); 
   }
    /**
    (sum(debit)*-1) + sum(credit) as amount')
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

   /*


   */
   public function bankTranstion()
    {
        return view('bank.bank-transtion');
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
