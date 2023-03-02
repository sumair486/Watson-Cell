<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schooldata;
use Illuminate\Http\Request;
use PDF;

class SchooldataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = Schooldata::latest()->get();
        return view('admin.school-management.schools',compact('schools'));
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
        $data = $this->validate($request, [
            'one_star' => 'required',
            'two_star' => 'required',
            'four_star' => 'required',
            'yes' => 'required',
            'no' => 'required',
            'functional' => 'required',
            'non_functional' => 'required',
            'reasons_in_case_of_non_functionality' => 'required',
            'number_of_total_beneficiaries' => 'required',
            'male' => 'required',
            'female' => 'required',
           ]);
           Schooldata::create($data);
           return redirect()->route('schools.index')->with('success','Data insert Successfully');
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
    public function edit(Schooldata $school)
    {
        return view('admin.school-management.edit-school',compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schooldata $school)
    {
        $this->validate($request, [
            'one_star' => 'required',
            'two_star' => 'required',
            'four_star' => 'required',
            'yes' => 'required',
            'no' => 'required',
            'functional' => 'required',
            'non_functional' => 'required',
            'reasons_in_case_of_non_functionality' => 'required',
            'number_of_total_beneficiaries' => 'required',
            'male' => 'required',
            'female' => 'required',
           ]);
           $school->one_star = $request->one_star;
           $school->two_star = $request->two_star;
           $school->four_star = $request->four_star;
           $school->yes = $request->yes;
           $school->no = $request->no;
           $school->functional = $request->functional;
           $school->non_functional = $request->non_functional;
           $school->reasons_in_case_of_non_functionality = $request->reasons_in_case_of_non_functionality;
           $school->number_of_total_beneficiaries = $request->number_of_total_beneficiaries;
           $school->male = $request->male;
           $school->female = $request->female;

           $school->save();
           return redirect()->route('schools.index')->with('success','Data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schooldata $school)
    {
        $school->delete();
        return redirect()->route('schools.index')->with('success','Data deleted Successfully');
    }

    public function downloadPDF() {

        $schools = Schooldata::all();

        $pdf = PDF::loadView('schpdf', compact('schools'));

        return $pdf->download('school.pdf');
       }
}
