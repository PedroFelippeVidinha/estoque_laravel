<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpaceRequest;
use App\Models\Space;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexspace()
    {
        $espacos = Space::all();

        return view('space.index', compact('espacos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('space.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpaceRequest $request)
    {
        $request->validated();

        return redirect()->route('space.index')
                        ->with('success','Espaço criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Space  $space
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $espaco = Space::where('id', $id)->first();

        return view('space.show',compact('espaco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Space  $space
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $espaco = Space::where('id', $id)->first();

        return view('space.edit',compact('espaco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Space  $space
     * @return \Illuminate\Http\Response
     */
    public function update(SpaceRequest $request, Space $spaces)
    {
        $request->validated();

        return redirect()->route('space.index')
                        ->with('success','Espaço atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Space  $space
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $espaco = Space::find($id)->first();
        $espaco->delete();

        return redirect()->route('space.index')
                        ->with('success','Espaço excluído com sucesso.');
    }
}
