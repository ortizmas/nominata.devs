<?php

namespace App\Http\Controllers\Frontend;

use App\Course;
use App\Trainee;
use App\Union;
use App\Association;
use App\Post;
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
        $unions = Union::orderBy('name', 'ASC')->get();
        $associations = Association::orderBy('name', 'ASC')->get();
        $trainees = Trainee::where('enabled', 1)->orderBy('name', 'ASC')->get();
        $trainees = collect($trainees)->all();
        $mensagem = Post::where('slug', 'pr-leonardo-nunes')->first();

        //dd($trainees[0]->association->union->initials);
    	return view('frontend.index', compact('unions', 'associations', 'trainees', 'mensagem'));
    }

    public function show($slug = null)
    {
    	//dd($slug);
    	if ($slug != null) {
    		$cursos = Course::all();
    		$trainees = Trainee::get()->where('have_job', 0)->where('enabled', 1);

    		$trainee = Trainee::where('enabled', 1)->where('slug', $slug)->first();
    		if ( $trainee != null ) {
    			return view('frontend.show', compact('trainee', 'cursos', 'trainees'));
    		}
    		//abort(404);
    		return response()->view('errors.custom', [], 404);
    		
    	}

    	return redirect()->route('inicio');
    	
    }

    public function getCurriculo()
    {
        return view('frontend.cv');
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
