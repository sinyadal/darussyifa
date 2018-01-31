<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TreatmentDetail;
use App\Patient;

class TreatmentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Validation
        $this->validate($request, [
            'illness' => 'required',
            'doctor' => 'required',
            'comment' => 'required',
        ]);

        // Save to database
        $treatment = new TreatmentDetail;

        $treatment->illness = $request->illness;
        $treatment->doctor = $request->doctor;
        $treatment->comment = $request->comment;
        $treatment->user_id = $request->user_id;

        $treatment->save();

        // Return view
        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $treatments = TreatmentDetail::where('user_id', '=', $id)->get();
        $patients = TreatmentDetail::where('user_id', '=', $id)->get()->first();
        $patient = Patient::where('id', '=', $patients->user_id)->get()->first();
        return view('patients.Treatment-history', compact('treatments', 'patient'));
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


    public function add($id)
    {
        // Validation
        $this->validate($request, [
            'illness' => 'required',
            'doctor' => 'required',
            'comment' => 'required',
        ]);

        // Save to database
        $treatment = new TreatmentDetail;

        $treatment->illness = $request->illness;
        $treatment->doctor = $request->doctor;
        $treatment->comment = $request->comment;
        $treatment->user_id = $request->user_id;

        $treatment->save();

        // Return view
        return redirect()->route('patient.index');
    }

    public function search($id)
    {
        $patient = Patient::find($id);
        return view('patients.Treatment-create', compact('patient'));
    }
}
