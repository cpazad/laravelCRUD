<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentData = student::latest() -> get();
        return view('student.index', [
            'all_data' => $studentData
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
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

    student::create([
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
    {
        $data = student::find($id);
                return view('student.show', [
                    'staff' => $data
                ]);  
    }

    /**
     * Delete Method created.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete ($id)
    {
        $student_delete = student::find($id);
        $student_delete -> delete();
        return redirect() -> back() -> with('success', 'Student deleted Successfully !' );  
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
