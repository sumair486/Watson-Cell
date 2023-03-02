<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;
use PDF;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = Organization::latest()->get();
        return view('admin.organization-management.organizations',compact('organizations'));
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
            'organization' => 'required',
            'donor' => 'required',
            'number_of_targeted_villages' => 'required',
            'district' => 'required',
            'tehsil' => 'required',
            'name_of_village_council' => 'required',
            'name_of_village' => 'required',
            'map_latitude' => 'required',
            'map_longititude' => 'required',
           ]);
           Organization::create($data);
           return redirect()->route('organizations.index')->with('success','Data insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        return view('admin.organization-management.edit-organization',compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        $this->validate($request, [
            'organization' => 'required',
            'donor' => 'required',
            'number_of_targeted_villages' => 'required',
            'district' => 'required',
            'tehsil' => 'required',
            'name_of_village_council' => 'required',
            'name_of_village' => 'required',
            'map_latitude' => 'required',
            'map_longititude' => 'required',
           ]);



           $organization->organization = $request->organization;
           $organization->donor = $request->donor;
           $organization->number_of_targeted_villages = $request->number_of_targeted_villages;
           $organization->district = $request->district;
           $organization->tehsil = $request->tehsil;
           $organization->name_of_village_council = $request->name_of_village_council;
           $organization->name_of_village = $request->name_of_village;
           $organization->map_latitude = $request->map_latitude;
           $organization->map_longititude = $request->map_longititude;

           $organization->save();
           return redirect()->route('organizations.index')->with('success','Data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();
        return redirect()->route('organizations.index')->with('success','Data deleted Successfully');
    }

    public function downloadPDF() {

        $organization = Organization::all();

        $pdf = PDF::loadView('orgpdf', compact('organization'));

        return $pdf->download('org.pdf');
       }
}
