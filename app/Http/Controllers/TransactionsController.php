<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transactions;
use App\Fish_categories;
use App\Employees;
use App\Suppliers;
use App\Transaction_statuses;
class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Transactions::with('fish_detail','employee_detail','supplier_detail','status_detail')->get();
        return view('listTransactions')->with(array(
            'data' => $data
            ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fish = Fish_categories::all();
        $employee = Employees::all();
        $supplier = Suppliers::all();
        $transaction_status = Transaction_statuses::all();
        return view('inputTransactions')->with(array(
            'fish' => $fish,
            'supplier' => $supplier,
            'employee' => $employee
            ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        
        $deleted = Transactions::find($id)->delete();
        if($deleted){
            session()->flash('message', "Transaction ID $id Deleted");
        }else{
            session()->flash('message', "Transaction ID $id failed to Deleted");
        }
        return redirect('listTransactions');
    }
}
