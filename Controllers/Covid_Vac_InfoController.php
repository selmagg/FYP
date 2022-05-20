<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\CovidVacInfo;
use Illuminate\Support\Facades\Auth;
use Gate;

class Covid_Vac_InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        /**show all covid vac info records if user is admin, 
     * if not then only show records where the user_id field of the CovidVacInfo table 
     * is the same value as that of the currently logged in user ID*/
    public function index()
    {
        $vac_infos = CovidVacInfo::all();
        if (Gate::denies('displayall')) {
            $vac_infos=$vac_infos->where('user_id', auth()->user()->id);
            }
            return view('covidvacinfo.index', compact('vac_infos'));    
        }

}
