<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\Models\Patient;
use App\Models\User;
use App\Models\AppointmentReq;

class AppointmentReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confirmed_apps = AppointmentReq::all();
        if (Gate::denies('displayall')) {
            $confirmed_apps=$confirmed_apps->where('user_id', auth()->user()->id);
            }
        return view('apps.confirmed', compact('confirmed_apps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /** directs to the create view*/
    public function create()
    {
         return view('apps.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // form validation, user must enter the following information 
        $app_info = $this->validate(request(), [
            'date' => 'required',
            'hour' => 'required',
            'mins' => 'required',
            'desc' => 'max:250',
            'gps'
        ]);

        // create a AppoitnmentRew object and set its values from the input
        $hour = $request->input('hour');
        $mins = $request->input('mins');

        //concatenating the hour and mins variables and storing it in the variable called time
        $time = $hour.":".$mins;

        $user = auth()->user(); 
        $app_info = new AppointmentReq;

        $app_info->app_date = $request->input('date');
        $app_info->app_time = $time;
        $app_info->app_desc = $request->input('desc');
        $app_info->gp_name = $request->input('gps');
        $app_info->user_id = $user->id; 
        $app_info->created_at = now();

        //check if the requested time, date and GP is not already taken by another patient
        $app_info_date = AppointmentReq::where('app_time', '=', $time) ->where('gp_name', '=',$request->input('gps'))->where('app_date', '=',$request->input('date'))->first();
        // if appointment time, date and GP does not exist then save the appointment request
            if ($app_info_date === null) {
                    // save the appointment request
                    $app_info->save();
                // generate a redirect HTTP response with a success message
                    return back()->with('success', 'Your appointment has been confirmed');
            } else {
                // generate a redirect HTTP response with an error message
                return back()->withErrors('This time and day is not available with this GP, please pick another date');
            }
    }

  
}
