<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedules;
use App\Logins;
class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Schedules::with('schedule_employee','schedule_manager')->get();
        return view('listSchedules')->with(array(
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
        $managers = Logins::with('user_data')->where('id_employee_status',3)->get();
        $employees = Logins::with('user_data')->where('id_employee_status',2)->get();
        return view('inputSchedules')->with(array(
            'employees' => $employees,
            'managers' => $managers
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
        $deleted = Schedules::find($id)->delete();
        if($deleted){
            session()->flash('message', "Schedule ID $id Deleted");
        }else{
            session()->flash('message', "Schedule ID $id failed to Deleted");
        }
        return redirect('listSchedules');
    }
}
