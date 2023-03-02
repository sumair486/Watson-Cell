<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ODFStatus;
use Illuminate\Http\Request;
use PDF;

class ODFStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $odfs = ODFStatus::latest()->get();
        return view('admin.odfstatus-management.odfs',compact('odfs'));
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
            'sustained' => 'required',
            'revert' => 'required',
            'reasons_in_case_of_revert' => 'required',
            'total_number_of_house_hold' => 'required',
            'total_population_of_village' => 'required',
            'number_of_laterine_in_village_during_tiggering' => 'required',
            'laterine_built_by_community' => 'required',
            'laterine_built_by_organization' => 'required',
            'number_of_targeted_schools' => 'required',
            'school_name' => 'required',
            'zero_star' => 'required',
           ]);
           ODFStatus::create($data);
           return redirect()->route('odfs.index')->with('success','Data insert Successfully');
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
    public function edit(ODFStatus $odf)
    {
        return view('admin.odfstatus-management.edit-odf',compact('odf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ODFStatus $odf)
    {
        $this->validate($request, [
            'sustained' => 'required',
            'revert' => 'required',
            'reasons_in_case_of_revert' => 'required',
            'total_number_of_house_hold' => 'required',
            'total_population_of_village' => 'required',
            'number_of_laterine_in_village_during_tiggering' => 'required',
            'laterine_built_by_community' => 'required',
            'laterine_built_by_organization' => 'required',
            'number_of_targeted_schools' => 'required',
            'school_name' => 'required',
            'zero_star' => 'required',
           ]);
           $odf->sustained = $request->sustained;
           $odf->revert = $request->revert;
           $odf->reasons_in_case_of_revert = $request->reasons_in_case_of_revert;
           $odf->total_number_of_house_hold = $request->total_number_of_house_hold;
           $odf->total_population_of_village = $request->total_population_of_village;
           $odf->number_of_laterine_in_village_during_tiggering = $request->number_of_laterine_in_village_during_tiggering;
           $odf->laterine_built_by_community = $request->laterine_built_by_community;
           $odf->laterine_built_by_organization = $request->laterine_built_by_organization;
           $odf->number_of_targeted_schools = $request->number_of_targeted_schools;
           $odf->school_name = $request->school_name;
           $odf->zero_star = $request->zero_star;

           $odf->save();
           return redirect()->route('odfs.index')->with('success','Data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ODFStatus $odf)
    {
        $odf->delete();
        return redirect()->route('odfs.index')->with('success','Data deleted Successfully');
    }

    public function downloadPDF() {

        $odfs = ODFStatus::all();

        $pdf = PDF::loadView('odfpdf', compact('odfs'));

        return $pdf->download('odf.pdf');
       }


}
