<?php

namespace App\Http\Controllers;

use App\Trainee;
use App\Association;
use App\Course;
use App\Period;
use Auth;

use Illuminate\Http\Request;
use App\Http\Requests\Trainees\StoreTraineeRequest;
use App\Http\Requests\Trainees\UpdateTraineeRequest;

class TraineeController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainees = Trainee::paginate();
        return view('dashboard.trainees.index', compact('trainees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $associations = Association::get(['id', 'initials']);
        $periods = Period::get(['id', 'year']);
        return view('dashboard.trainees.create', compact('associations', 'periods') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTraineeRequest $request)
    {

        if ( $request->hasFile('image') ) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $updload = request()->image->move(public_path('uploads/trainees'), $imageName);
        } else {
            $imageName = $request['image'];
        }

        if ( $request->hasFile('image_men') ) {
            $imageNameMen = time().'.'.request()->image_men->getClientOriginalExtension();
            $updload = request()->image_men->move(public_path('uploads/trainees'), $imageNameMen);
        } else {
            $imageNameMen = $request['image_men'];
        }

        if ( $request->hasFile('image_woman') ) {
            $imageNameWomen = time().'.'.request()->image_woman->getClientOriginalExtension();
            $updload = request()->image_woman->move(public_path('uploads/trainees'), $imageNameWomen);
        } else {
            $imageNameWomen = $request['image_woman'];
        }
        
        $trainee = Trainee::create([
            'name' => $request['name'],
            'slug' => $request['slug'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'marital_status' => $request['marital_status'],
            'image' => $imageName,
            'description' => $request['description'],
            'image_men' => $imageNameMen,
            'content' => $request['content'],
            'name_wife' => $request['name_wife'],
            'image_woman' => $imageNameWomen,
            'content_woman' => $request['content_woman'],
            'redirect' => $request['redirect'],
            'external_url' => $request['external_url'],
            'order' => $request['order'],
            'enabled' => $request['enabled'],
            'status' => $request['status'],
            'association_id' => $request['association_id'],
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('trainees.index')->with('success', 'O trainee foi cadastrado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function show(Trainee $trainee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainee $trainee)
    {
        $associations = Association::get(['id', 'initials']);
        $periods = Period::get(['id', 'year']);
        return view('dashboard.trainees.edit', compact('associations', 'periods', 'trainee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTraineeRequest $request, Trainee $trainee)
    {
        //dd( $trainee->image );
        $traineeUpdate = Trainee::find($trainee->id);
        if ( $request->hasFile('image') != false) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $updload = request()->image->move(public_path('uploads/trainees'), $imageName);
        } else {
            $imageName = $trainee->image;
        }

        if ( $request->hasFile('image_men') ) {
            $imageNameMen = time().'.'.request()->image_men->getClientOriginalExtension();
            $updload = request()->image_men->move(public_path('uploads/trainees'), $imageNameMen);
        } else {
            $imageNameMen = $trainee->image_men;
        }

        if ( $request->hasFile('image_woman') ) {
            $imageNameWomen = time().'.'.request()->image_woman->getClientOriginalExtension();
            $updload = request()->image_woman->move(public_path('uploads/trainees'), $imageNameWomen);
        } else {
            $imageNameWomen = $trainee->image_woman;
        }

        
        
        $trainee = $traineeUpdate->update([
            'name' => $request['name'],
            'slug' => $request['slug'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'marital_status' => $request['marital_status'],
            'image' => $imageName,
            'description' => $request['description'],
            'image_men' => $imageNameMen,
            'content' => $request['content'],
            'name_wife' => $request['name_wife'],
            'image_woman' => $imageNameWomen,
            'content_woman' => $request['content_woman'],
            'redirect' => $request['redirect'],
            'external_url' => $request['external_url'],
            'order' => $request['order'],
            'enabled' => $request['enabled'],
            'status' => $request['status'],
            'association_id' => $request['association_id'],
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('trainees.edit', $trainee)->with('success', 'O trainee foi alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainee $trainee)
    {
        return Trainee::destroy($trainee->id);
    }
}
