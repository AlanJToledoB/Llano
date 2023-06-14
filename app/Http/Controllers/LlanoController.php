<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;



class LlanoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function show4to()
    {
        $planDeEstudio = DB::table('plan_de_estudio_4to')->get();
        return view('planDeEstudio.4to', ['planDeEstudio' => $planDeEstudio]);
    }


    public function show5to()
    {
        $planDeEstudio = DB::table('plan_de_estudio_5to')->get();
        return view('planDeEstudio.5to', ['planDeEstudio' => $planDeEstudio]);
    }

    public function show6to()
    {
        $planDeEstudio = DB::table('plan_de_estudio_6to')->get();
        return view('planDeEstudio.6to', ['planDeEstudio' => $planDeEstudio]);
    }

    public function formulario()
    {
        
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
