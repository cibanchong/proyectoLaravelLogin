<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = DB::table('proyectos')->get();
        return view('proyectos.index',compact('proyectos'));
        //return view('proyectos.index',['proyectos' -> $proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Proyectos::create($request->all());
        $proyecto = new Proyectos();
        $proyecto -> email = $request->post('email');
        $proyecto -> contra = $request->post('contra');
        $proyecto->save();
        return redirect()->route('index.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function show(Proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyectos::find($id);
        return view('proyectos.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'email'=> 'required|max:225',
        //     'contra'=>'required',
        // ]);

        $proyecto = Proyectos::find($id);
        $proyecto -> email = $request->post('email');
        $proyecto -> contra = $request->post('contra');
        $proyecto->save();

        return redirect()->route('index.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = Proyectos::find($id);
        $proyecto->delete();
        return redirect()->route('index.index')
            ->with('success', 'Proyecto deleted successfully');
    }
}
