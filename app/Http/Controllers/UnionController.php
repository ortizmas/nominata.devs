<?php

namespace App\Http\Controllers;

use App\Union;
use Illuminate\Http\Request;
use App\Http\Requests\Unions\StoreUnionRequest;
use App\Http\Requests\Unions\UpdateUnionRequest;

class UnionController extends Controller
{
    
    public function index()
    {
        $unions = Union::get();

        return view('dashboard.unions.index', compact('unions'));
    }

    
    public function create()
    {
        return view('dashboard.unions.create');
    }

    public function store(StoreUnionRequest $request)
    {
        $union = Union::create([
            'initials' => $request['initials'],
            'slug' => $request['slug'],
            'name' => $request['name']
        ]);

        return redirect()->route('unions.index')->with('success', 'União cadastrado com sucesso!!');
    }
   
    public function show(Union $union)
    {
        //
    }

    public function edit(Union $union)
    {
        return view('dashboard.unions.edit', compact('union'));
    }

    public function update(UpdateUnionRequest $request, Union $union)
    {
        $unionUpdate = Union::find($union->id);

        $union = $unionUpdate->update([
            'initials' => $request['initials'],
            'slug' => $request['slug'],
            'name' => $request['name']
        ]);

        return redirect()->route('unions.index')->with('success', 'União alterado com sucesso!!');
    }

    public function destroy(Union $union)
    {
        //
    }
}
