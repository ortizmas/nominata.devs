<?php

namespace App\Http\Controllers;

use App\Association;
use App\Union;
use Illuminate\Http\Request;
use App\Http\Requests\Associations\StoreAssociationRequest;
use App\Http\Requests\Associations\UpdateAssociationRequest;

class AssociationController extends Controller
{
    public function index()
    {
        $associations = Association::get();

        return view('dashboard.associations.index', compact('associations'));
    }

    
    public function create()
    {
        $unions = Union::get(['id', 'initials']);
        return view('dashboard.associations.create', compact('unions'));
    }

    public function store(StoreAssociationRequest $request)
    {
        $association = Association::create([
            'initials' => $request['initials'],
            'slug' => $request['slug'],
            'name' => $request['name'],
            'union_id' => $request['union_id']
        ]);

        return redirect()->route('associations.index')->with('success', 'Associação cadastrado com sucesso!!');
    }
   
    public function show(Association $association)
    {
        //
    }

    public function edit(Association $association)
    {
        $unions = Union::get(['id', 'initials']);
        return view('dashboard.associations.edit', compact('unions', 'association'));
    }

    public function update(UpdateAssociationRequest $request, Union $association)
    {
        $associationUpdate = Association::find($association->id);

        $association = $associationUpdate->update([
            'initials' => $request['initials'],
            'slug' => $request['slug'],
            'name' => $request['name'],
            'union_id' => $request['union_id']
        ]);

        return redirect()->route('associations.index')->with('success', 'Associação alterado com sucesso!!');
    }

    public function destroy(Association $association)
    {
        //
    }
}
