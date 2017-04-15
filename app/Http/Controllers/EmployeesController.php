<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logins;
use App\Employees;
use App\Employee_statuses;
class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Logins::with('user_data','user_status')->orderBy('id_employee', 'asc')->get();
        return view('listEmployees')->with(array(
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
        $status = Employee_statuses::all();
        return view('inputEmployees')->with(array(
            'status' => $status
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
        $emp = Employees::create(array(
            'name' => $request->name,
            'telp' => $request->telphone,
            'address' => $request->address,
            'photo' => $request->photo
            ));
        $login = Logins::create(array(
            'id_employee' => $emp->id_employee,
            'username' => $request->name,
            'password' => bcrypt($request->password),
            'id_employee_status' => $request->position,
            ));
        if($login){
            session()->flash('message',"Employee $request->name Added");
        }else{
            session()->flash('message',"Employee $request->name failed to Add");
        }
        return redirect('/listEmployees');
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
        return view('userProfile');
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
        Logins::find($id)->delete();
        $deleted = Employees::find($id)->delete();
        if($deleted){
            session()->flash('message', "Employees ID $id Deleted");
        }else{
            session()->flash('message', "Employees ID $id failed to Deleted");
        }
        return redirect('listEmployees');
    }
}
