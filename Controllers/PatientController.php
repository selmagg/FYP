<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\User;
use \Auth;
use Gate;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /** shows the patient's information, if admin then shows all patients info */
    public function index()
    {
        $patients = Patient::all();
        if (Gate::denies('displayall')) {
            
            $patients=$patients->where('user_id', auth()->user()->id);
            }
            return view('patients.index', compact('patients'));    
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /** fuction requests the data needed and the format*/
    public function store(Request $request)
    {
        // form validation
        $patient = $this->validate(request(), [
            'nhs_number' => 'required|numeric|digits_between:6,6|unique:patients,nhs_number',
            'surgery_name' => 'required',
            'phone' => 'required|numeric',
            'f_name' => 'required',
            'm_name' => 'sometimes',
            'postcode' => 'required|regex:/^[A-Z]{1,2}[0-9]{1,2} ?[0-9][A-Z]{2}$/i',
            'dob' => 'required|before:-15 years',
            'surgery_name' => 'required',

        ]);

        $user = auth()->user(); 
        //create a new Patient object and set its values from the input
        $patient = new Patient;

        $patient->nhs_number = $request->input('nhs_number');
        $patient->phone = $request->input('phone');
        $patient->f_name = $request->input('f_name');
        $patient->m_name = $request->input('m_name');
        $patient->l_name = $user->name; 
        $patient->postcode = $request->input('postcode');
        $patient->dob = $request->input('dob');
        $patient->surgery_name = $request->input('surgery_name');

        $patient->user_id = $user->id;
        $patient->email = $user->email;
        $patient->created_at = now();

        // save the Patient object
        $patient->save();
        // generate a redirect HTTP response with a success message
        return back()->with('success', 'Patient has been added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**retrieve the ID of the patient, pass it to the edit view*/
    public function edit($id)
    {
        $patient = Patient::find($id);

        return view('patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**retrieve the ID of the patient, then allow changing the email; changes must not be an 
     * existing email in ther Users table email field
     * then save into the email field and return to the /patients where they can see their details stored in the Patients table*/
    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);

            $this->validate(request(), [
            'email'=> 'required|email|unique:users,email', 
            ]);

        $patient->email = $request->input('email');
        $patient->updated_at = now();

        $patient->save();
        return redirect('patients');

    }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /** find the patient record from the Patient table through the ID, 
     * then delete, logout user and redirect the user to the home page*/
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient ->delete();

        return redirect('login')->with(Auth::logout());
    }
}
