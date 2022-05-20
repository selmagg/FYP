<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Medication;
use Illuminate\Support\Facades\Auth;
use Gate;

class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**show all medicaiton record if user is admin, 
     * if not then only show records where the user_id field of the Medication table 
     * is the same value as that of the currently logged in user ID*/
    public function index()
    { //view and order medications tab
         $med_infos = Medication::all();
         if (Gate::denies('displayall')) {
            $med_infos=$med_infos->where('user_id', auth()->user()->id);
            }
        return view('medications.index', compact('med_infos'));
    }
}
