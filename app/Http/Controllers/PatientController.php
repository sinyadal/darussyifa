<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use PDF;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $patients = Patient::orderBy('created_at', 'desc')->paginate(6);
        $count = Patient::all()->count();

        return view('patients.index', compact('patients', 'count'));
    }

    public function create()
    {
        $patients = Patient::all();

        return view('patients.create', compact('patients'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'ic_number' => 'required|max:20',
            'gender' => 'required',
            'phone_number' => 'required|max:15',
            'email' => 'required|max:20',
            'address' => 'required|max:100',
            'postcode' => 'required|max:10',
            'state' => 'required|max:20',
        ]);

        $patient = new Patient;

        $patient->name = $request->name;
        $patient->ic_number = $request->ic_number;
        $patient->gender = $request->gender;
        $patient->phone_number = $request->phone_number;
        $patient->email = $request->email;
        $patient->address = $request->address;
        $patient->postcode = $request->postcode;
        $patient->state = $request->state;

        $patient->save();

        // Return view
        return redirect()->route('treatment.create', compact('patient'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $patients = Patient::find($id);

        return view('patients.edit', compact('patients'));
    }

    public function update(Request $request, $id)
    {
        //
        $patient = Patient::find($id);

        $this->validate($request, [
            'name' => 'required|max:50',
            'ic_number' => 'required|max:20',
            'gender' => 'required',
            'phone_number' => 'required|max:15',
            'email' => 'required|max:20',
            'address' => 'required|max:100',
            'postcode' => 'required|max:10',
            'state' => 'required|max:20',
        ]);

        $patient = Patient::find($id);

        $patient->name = $request->name;
        $patient->ic_number = $request->ic_number;
        $patient->gender = $request->gender;
        $patient->phone_number = $request->phone_number;
        $patient->email = $request->email;
        $patient->address = $request->address;
        $patient->postcode = $request->postcode;
        $patient->state = $request->state;

        $patient->save();

        $patients = Patient::all();
        $count = Patient::all()->count();
        
        return view('patients.index', compact('patients', 'count'));
    }

    public function destroy($id)
    {
        $patients = Patient::find($id);

        $patients->delete();
        
        return redirect()->route('patient.index');
    }

    public function search(Request $request)
    {
        $input = $request->search;

        $patients = Patient::where('name', 'LIKE', '%'.$input.'%')->orWhere('ic_number', 'LIKE', '%'.$input.'%')->get();

        $count = Patient::where('name', 'LIKE', '%'.$input.'%')->orWhere('ic_number', 'LIKE', '%'.$input.'%')->count();

        return view('patients.index', compact('patients', 'count'));
    }

    public function pdf($id)
    {
        $patients = Patient::find($id);

        $pdf = PDF::loadView('pdf', compact('patients'));

        return $pdf->stream('invoice.pdf');
    }
}
