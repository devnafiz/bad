<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalLoan;
use Session;
use App\PersonalLoanTrans;

class PersonalLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal_loans =PersonalLoan::all();
        return view('personal_loan.manage-personal-loan',compact('personal_loans'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal_loan.create-personal-loan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal_loan = new PersonalLoan;
         $personal_loan->name =$request->get('name');
         $personal_loan->phone =$request->get('phone');
         $personal_loan->address =$request->get('address');
         $personal_loan->save();
         Session::flash('msg','succesfuly add personal loan');
         return back();
    }
    /**
       add personal loan
    **/
       public function personalLoan(){
          $loaner_name =PersonalLoan::all();
        return view('personal_loan.p_add_loan' ,compact('loaner_name'));
       }

       /**
       sorte  paersonal loan
       **/
       public function personalLoanSave(Request $request){
         $personal_loan_trans = new PersonalLoanTrans;

         $personal_loan_trans->person_id =$request->get('person_id');
          $personal_loan_trans->phone =$request->get('phone');
          $personal_loan_trans->date =$request->get('date');
          $personal_loan_trans->details =$request->get('details');
          $personal_loan_trans->credit =$request->get('ammount');
          $personal_loan_trans->debit = 0;
          $personal_loan_trans->save();
           Session::flash('msg','Successfully add loan');
           return back();



       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     **/
       public function personalLoanManage(){
        $personal_loan_trans =PersonalLoanTrans::all();
        //dd($personal_loan_trans);
        return view('personal_loan.manage_p_loan' , compact('personal_loan_trans'));
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
