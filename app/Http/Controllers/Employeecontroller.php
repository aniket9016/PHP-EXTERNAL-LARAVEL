<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class Employeecontroller extends Controller
{
    //
    function openregister()
    {
        return view("display");
    }
    function store(Request $request)
    {
        $result = $request->all();
        $result["hobby"] = implode(",", $result["hobby"]);
        //dd($result);
        Employee::create($result);
        return redirect()->back()->with('success', 'Employee added successfully');
    }
    function display()
    {
        $employee = Employee::get();
        return view("employee", ["employee" => $employee]);
    }
    function delete($id)
    {
        Employee::where("eid", "=", $id)->delete();
        return redirect()->back()->with('success', 'Employee deleted successfully');

    }
    function updatedata($id)
    {
        $employee = Employee::where("eid", "=", $id)->first();
        return view("update", ["employee" => $employee]);
    }
    function update(Request $request)
    {
        Employee::where("eid", "=", $request->eid)->update([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'city' => $request->city,
            'hobby' => implode(',', $request->hobby),
            'dob' => $request->dob,
        ]);
        return redirect()->back()->with('success', 'Employee updated successfully');
    }
}
