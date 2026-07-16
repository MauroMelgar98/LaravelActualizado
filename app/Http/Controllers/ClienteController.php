<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $clientes = Cliente::OrderBy('id','desc')->get();
        return view ('clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $datos = $request -> validate ([
            'nombre' => ['required','string','max:100'],
            'apellido' => ['required','string','max:100'],
            'ci' => ['nullable','string','20'],
            'telefono' => ['required','string','max:20'],
            'correo' => ['nullable','email','max:150'],
            'direccion' => ['nullable','string','max:250']

        ]);
        Cliente::create($datos);

        return redirect()
        -> route ('cliente.index')
        -> with ('mensaje','Cliente añadido exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
