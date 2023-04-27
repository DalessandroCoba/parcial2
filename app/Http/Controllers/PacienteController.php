<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view("paciente.index",["pacientes" => $pacientes]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("paciente.new");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pacientes = new Paciente();

        $pacientes->id_Paciente=$request->post('documento');
        $pacientes->nom_Paciente=$request->post('nombres');
        $pacientes->age_Paciente=$request->post('edad');
        $pacientes->tel_Paciente=$request->post('telefono');
        $pacientes->email_Paciente=$request->post('correo');
        $pacientes->dir_Paciente=$request->post('direccion');
        $pacientes->estado=$request->post('estado');
        $pacientes->save();

        return redirect()->route("paciente.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pacientes = Paciente::find($id);
        return view("paciente.update", compact('pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pacientes = Paciente::find($id);

        $pacientes->id_Paciente=$request->post('documento');
        $pacientes->nom_Paciente=$request->post('nombres');
        $pacientes->age_Paciente=$request->post('edad');
        $pacientes->tel_Paciente=$request->post('telefono');
        $pacientes->email_Paciente=$request->post('correo');
        $pacientes->dir_Paciente=$request->post('direccion');
        $pacientes->estado=$request->post('estado');
        $pacientes->save();

        return redirect()->route("paciente.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
    }
}