<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/teacher/teacher', ['teachers' => Teacher::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request;
        $validatedData = $request->validate([
            'teacher_id' => 'required|max:255|unique:teachers',
            'fullname' => 'required',
            'place_birth' => 'required',
            'birth_date' => 'required',
            'full_address' => 'required',
            'pra_bachelor' => 'required',
            'bachelor' => 'required',
            'masters' => 'required',
            'doctoral' => 'required',
            'job_desk' => 'required',
            'position' => 'required',
            'date_joint'=> 'required',
            'assignment' => 'required',
            'word' => 'required',
            'picture' => 'required'
        ]);

        Teacher::create($validatedData);
        return redirect('/teacher/teacher')-> with('success', 'Data Pengajar Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('teacher/profile', ['teacher' => Teacher::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teacher/edit', ['teacher'=>$teacher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $rules = [
            'fullname' => 'required',
            'place_birth' => 'required',
            'birth_date' => 'required',
            'full_address' => 'required',
            'pra_bachelor' => 'required',
            'bachelor' => 'required',
            'masters' => 'required',
            'doctoral' => 'required',
            'job_desk' => 'required',
            'position' => 'required',
            'date_joint'=> 'required',
            'assignment' => 'required',
            'word' => 'required',
            'picture' => 'required'
        ];

        if($request->teacher_id != $teacher->teacher_id){
            $rules['teacher_id'] = 'required|max:255|unique:teachers';
        }

        $validatedData = $request->validate($rules);

        Teacher::where('id', $teacher->id)
                    ->update($validatedData);
        return redirect('/teacher/teacher')-> with('success', 'Data Pengajar Berhasil Di Ubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        Teacher::destroy($teacher->id);
        return redirect('/teacher/teacher')-> with('success', 'Data Pengajar Berhasil Dihapus !');
    }
}
