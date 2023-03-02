<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Benefeciaries;
use Illuminate\Http\Request;
use PDF;


// use PDF;

class BenefeciariesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefeciares = Benefeciaries::latest()->get();
        return view('admin.benefeciaries-management.benefeciaries',compact('benefeciares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'male' => 'required',
            'female' => 'required',
            'number_of_total_men' => 'required',
            'number_of_total_women' => 'required',
            'number_of_disabled_beneficiaries' => 'required',
            'challenges' => 'required',
            'lesson_learnt' => 'required',
            'name_of_reporting_person' => 'required',
            'phone_no_reporting_person' => 'required',
           ]);
           Benefeciaries::create($data);
           return redirect()->route('benefeciariess.index')->with('success','Data insert Successfully');
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

        $benefeciarie=Benefeciaries::find($id);
        return view('admin.benefeciaries-management.edit-benefeciarie',compact('benefeciarie'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $benefeciarie = Benefeciaries::find($id);

        $this->validate($request, [
            'male' => 'required',
            'female' => 'required',
            'number_of_total_men' => 'required',
            'number_of_total_women' => 'required',
            'number_of_disabled_beneficiaries' => 'required',
            'challenges' => 'required',
            'lesson_learnt' => 'required',
            'name_of_reporting_person' => 'required',
            'phone_no_reporting_person' => 'required',
           ]);
           $benefeciarie->male = $request->male;
           $benefeciarie->female = $request->female;
           $benefeciarie->number_of_total_men = $request->number_of_total_men;
           $benefeciarie->number_of_total_women = $request->number_of_total_women;
           $benefeciarie->number_of_disabled_beneficiaries = $request->number_of_disabled_beneficiaries;
           $benefeciarie->challenges = $request->challenges;
           $benefeciarie->lesson_learnt = $request->lesson_learnt;
           $benefeciarie->name_of_reporting_person = $request->name_of_reporting_person;
           $benefeciarie->phone_no_reporting_person = $request->phone_no_reporting_person;

           $benefeciarie->save();
           return redirect()->route('benefeciariess.index')->with('success','Data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Benefeciaries $benefeciarie)
    {
        $benefeciarie->delete();
        return redirect()->route('benefeciariess.index')->with('success','Data deleted Successfully');
    }

    public function downloadPDF() {

        $benefeciaries = Benefeciaries::all();

        $pdf = PDF::loadView('benefpdf', compact('benefeciaries'));

        return $pdf->download('benefeciarie.pdf');
       }
}
