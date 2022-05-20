<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Medication;
use App\Models\MedicationRequest;
use Illuminate\Support\Facades\Auth;
use Gate;

class MedicationRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**display all records of MedicationRequest table if admin, 
     * if non-admin only display records where the user_id field is the same as
     * the ID of currently logged in user */
    public function index()
    {
        $med_reqs = MedicationRequest::all();
        if (Gate::denies('displayall')) {
            $med_reqs=$med_reqs->where('user_id', auth()->user()->id);
            }
        return view('medications.history', compact('med_reqs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**set all values and save the request */
    public function store(Request $request, $med_id)
    {
        //setting the values once an order request is made
        $med_req = new MedicationRequest;
        $med =  Medication::find($med_id);
        $med_req->med_id = $med_id;
        $med_req->med_name = $med->medication_name;
        $med_req->user_id = Auth::user()->id;
        $med_req->request_status = 'in progress'; 
        $med_req->created_at = now(); 

        $med_req->save();
        //a redirect HTTP response
        return back()->with('Order request recieved'); 
    }
}
