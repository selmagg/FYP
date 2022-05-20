<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthRecord;
use Illuminate\Support\Facades\Auth;
use Gate;

class HealthRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**show all health records if user is admin, 
     * if not then only show records where the user_id field of the HealhtRecord table 
     * is the same value as that of the currently logged in user ID*/
    public function index()
    {
        $health_infos = HealthRecord::all();
        if (Gate::denies('displayall')) {
            $health_infos=$health_infos->where('user_id', auth()->user()->id);
            }
        return view('healthrecords.index', compact('health_infos'));
    }

}
