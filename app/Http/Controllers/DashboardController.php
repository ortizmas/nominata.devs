<?php

namespace App\Http\Controllers;

use App\Career;
use App\Trainee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function home()
    {
        $careers = Career::get()->where('status', 1);
        $trainees = Trainee::get()->where('have_job', 0)->where('enabled', 1);
        $young_employees = Trainee::get()->where('have_job', 1)->where('enabled', 1);
        $allJT = Trainee::where('enabled', 1)->orderBy('name', 'ASC')->get();

        return view('dashboard.v2', compact('careers', 'trainees', 'young_employees', 'allJT'));
    }
    public function versiontwo()
    {
        return view('dashboard.v1');
    }
    
    public function versionthree()
    {
        return view('dashboard.v3');
    }
}
