<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TreatmentDetail;
use App\Patient;

class TreatmentDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
    }

    public function create()
    {
        $patient = Patient::orderBy('created_at', 'desc')->first(); // Fetch latest data 

        return view('treatment-details.create', compact('patient')); // Pass latest data to views
    }

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

    public function show($id) // Later, switch this to index, update route
    {
        $treatments = TreatmentDetail::where('user_id', '=', $id)->orderBy('created_at', 'desc')->get(); // Display bundle

        $patients = TreatmentDetail::where('user_id', '=', $id)->get()->first(); // Display single row
        $patient = Patient::where('id', '=', $patients->user_id)->get()->first(); 
        
        return view('treatment-details.show', compact('treatments', 'patient'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
