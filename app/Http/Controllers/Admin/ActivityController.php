<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activitytype;
use Illuminate\Http\Request;
// use PDF;
use PDF;
class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activitys = Activitytype::latest()->get();
        return view('admin.activity-management.activitys',compact('activitys'));
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
            'clts' => 'required',
            'slts' => 'required',
            'activity_start_date' => 'required',
            'activity_end_date' => 'required',
            'triggering' => 'required',
            'declaration' => 'required',
            'verification' => 'required',
            'certification' => 'required',
            'yes' => 'required',
            'No' => 'required',
           ]);
           Activitytype::create($data);
           return redirect()->route('activitys.index')->with('success','Data insert Successfully');
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
    public function edit(Activitytype $activity)
    {
        return view('admin.activity-management.edit-activity',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activitytype  $activity)
    {
        $this->validate($request, [
            'clts' => 'required',
            'slts' => 'required',
            'activity_start_date' => 'required',
            'activity_end_date' => 'required',
            'triggering' => 'required',
            'declaration' => 'required',
            'verification' => 'required',
            'certification' => 'required',
            'yes' => 'required',
            'No' => 'required',
           ]);
           $activity->clts = $request->clts;
           $activity->slts = $request->slts;
           $activity->activity_start_date = $request->activity_start_date;
           $activity->activity_end_date = $request->activity_end_date;
           $activity->triggering = $request->triggering;
           $activity->declaration = $request->declaration;
           $activity->verification = $request->verification;
           $activity->certification = $request->certification;
           $activity->yes = $request->yes;
           $activity->No = $request->No;

           $activity->save();
           return redirect()->route('activitys.index')->with('success','Data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activitytype $activity)
    {
        $activity->delete();
        return redirect()->route('activitys.index')->with('success','Data deleted Successfully');
    }

    public function downloadPDF() {

        $activitys = Activitytype::all();

        $pdf = PDF::loadView('pdf', compact('activitys'));

        return $pdf->download('activity.pdf');
       }
}
