<?php

namespace App\Http\Controllers\Seguridad;

use App\Modelos\Seguridad\usuarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class usuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return usuarios::all();
        //return ["saludo"=>"Hola"];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modelos\Seguridad\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modelos\Seguridad\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modelos\Seguridad\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modelos\Seguridad\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuarios $usuarios)
    {
        //
    }
}
