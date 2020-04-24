<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Student::all();

        return view('artuz.layouts.admin.views.students', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ismi' => 'required',
            'familyasi' => 'required',
            'sharifi' => 'required',
            'yashash_manzili' => 'required',
            'tell_nomer' => 'required',
            'surat' => 'required',
            'pass_num' => 'required',
            'pass_ser' => 'required',
            'tugulgan_kun' => 'required',
            'guruh' => 'required',
            'talim_shakli' => 'required',
            'pass_copy' => 'required',

        ]);


    //     $input_data = array(
    //         'ismi' => $request->ismi,
    //         'familyasi' => $request->familyasi,
    //         'sharifi' => $request->sharifi,
    //         'yashash_manzili' => $request->yashash_manzili,
    //         'tell_nomer' => $request->tell_nomer,
    //         'surat' => $request->surat,
    //         'pass_num' => $request->pass_num,
    //         'pass_ser' => $request->pass_ser,
    //         'tugulgan_kun' => $request->tugulgan_kun,
    //         'guruh_id' =>  $request->guruh,
    //         'talim_shakli' =>  $request->talim_shakli,
    //         'pass_copy' =>  $request->pass_copy
    //     );

    //    $data = Student::create($input_data);
           Student::create($request->all());
                //dd( $request);


        return redirect()->route('talabalar.index')->with('Success', "Talaba qo'shildi");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
