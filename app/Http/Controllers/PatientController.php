<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patients;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patients::all();
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patients::all();
        return view('patients.create', compact('patients'));
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
            'name' => 'required|max:50',
            'ic_number' => 'required|max:20',
            'gender' => 'required',
            'phone_number' => 'required|max:15',
            'email' => 'required|max:20',
            'address' => 'required|max:100',
            'postcode' => 'required|max:10',
            'state' => 'required|max:20',
        ]);

        // Save to database
        $patient = new Patients;

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
        //
        $patients = Patients::find($id);
        return view('patients.edit', compact('patients'));
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
        $patient = Patients::find($id);

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

        $patient = Patients::find($id);
        $patient->name = $request->name;
        $patient->ic_number = $request->ic_number;
        $patient->gender = $request->gender;
        $patient->phone_number = $request->phone_number;
        $patient->email = $request->email;
        $patient->address = $request->address;
        $patient->postcode = $request->postcode;
        $patient->state = $request->state;

        $patient->save();

        $patients = Patients::all();
        return view('patients.index', compact('patients'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patients::find($id);

        $patients->delete();
        
        return redirect()->route('patient.index');
    }

    public function search(Request $request) {

        $input = $request->search;

        $patients = Patients::where('name', 'LIKE', '%'.$input.'%')->orWhere('ic_number', 'LIKE', '%'.$input.'%')->get();

        return view('patients.index', compact('patients'));
	}
}
