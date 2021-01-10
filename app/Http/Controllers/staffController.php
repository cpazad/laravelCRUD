<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffData = staff::latest() -> get();
        return view('staff.index', [
            'all_data' => $staffData
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request, [
            'name' => 'required',
            'email' => 'required | unique:staff',
            'cell' => 'required | unique:staff',
            'uname' => 'required | min:6 | max:15 | unique:staff'

    ],
    [
        'name.required' => 'Name Must',
        'email.required' => 'email Nai keno',
        'cell.required' => 'The cell number is taken',
        'uname.required' => 'Name Must'
    ]);

    staff::create([
        'name' => $request -> name,
        'email' => $request -> email,
        'cell' => $request -> cell,
        'uname' => $request -> uname,
        'password' => password_hash($request -> password, PASSWORD_DEFAULT),
        'age' => $request -> age,
        'photo' => " ",

    ]);

    return redirect() -> back() -> with('success', 'Staff added Successfully !' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
            public function show($id)
            {   $data = staff::find($id);
                return view('staff.show', [
                    'staff' => $data
                ]);    
            }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete ($id)
    {
        $staff_delete = staff::find($id);
        $staff_delete -> delete();
        return redirect() -> back() -> with('success', 'Staff deleted Successfully !' );  
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
