<?php

namespace App\Http\Controllers\Frontend;

use App\Course;
use App\Trainee;
use App\Union;
use App\Association;
use App\Http\Requests\Site\StoreInscriptionRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function index()
    {
    	$cursos = Course::all();
    	$trainees = Trainee::get()->where('have_job', 0)->where('enabled', 1);
        $young_employees = Trainee::get()->where('have_job', 1)->where('enabled', 1);
        $unions = Union::all();
        $associations = Association::all();
        $trainees = Trainee::where('enabled', 1)->get();
        $trainees = collect($trainees)->all();

        //dd($trainees[0]->association->union->initials);
    	return view('frontend.index', compact('unions', 'associations', 'trainees'));
    }

    public function show($slug = null)
    {
    	//dd($slug);
    	if ($slug != null) {
    		$cursos = Course::all();
    		$trainees = Trainee::get()->where('have_job', 0)->where('enabled', 1);

    		$trainee = Trainee::where('enabled', 1)->where('slug', $slug)->first();

    		if ( $trainee->count() > 0 ) {
    			return view('frontend.show', compact('trainee', 'cursos', 'trainees'));
    		}
    		//abort(404);
    		return response()->view('errors.custom', [], 404);
    		
    	}

    	return redirect()->route('inicio');
    	
    }

    public static function filter()
    {
    	return view('tests.filter');
    }

    public function inscription(StoreInscriptionRequest $request)
    {
    	dd($request);
    }

}
