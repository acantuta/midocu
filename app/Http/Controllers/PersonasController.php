<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
	public function index(Request $request)
    {
        $items = Persona::all();
        $data = compact('items');

        return view('personas.index', $data);
    }

    public function create(Request $request)
    {
        $tipos = ['natural' => 'natural', 'juridica' => 'juridica'];
        $prioridades ['normal' => 'normal', 'urgente']
        $data = compact('tipos');

        return view('personas.create', $data);
    }

    public function edit(Request $request, $expedienteTipoId)
    {
        $item = Persona::findOrFail($expedienteTipoId);
        $tipos = ['natural' => 'natural', 'juridica' => 'juridica'];
        $data = compact('item', 'tipos');

        return view('personas.edit', $data);
    }

    public function store(Request $request)
    {
        $params = $request->only([
            'tipo',
            'nro_identificacion',
            'nombres',
            'apellidos',
            'razon_social',
            'correo',
            'direccion',
            'telefono',
        ]);

        $request->validate([
            'tipo' => 'required',
        ]);

        $item = new Persona;
        $item->fill($params);

        $item->save();

        return redirect('/personas')->with('successful_message', 'Se ha creado una nueva persona');
    }

    public function update(Request $request, $expedienteTipoId)
    {
        $request->validate([
            'tipo' => 'required',
        ]);

        $params = $request->only([
            'tipo',
            'nombres',
            'apellidos',
            'correo',
            'direccion',
            'telefono',
            'area_id',
        ]);

        $item = Persona::findOrFail($expedienteTipoId);
        $item->fill($params);

        $item->save();

        return redirect('/personas')->with('successful_message', 'Se ha editado la persona exitosamente');
    }

    public function delete(Request $request, $expedienteTipoId)
    {
        $item = Persona::find($expedienteTipoId);
        $item->delete();

        return redirect('/personas')->with('successful_message', 'Se ha eliminado exitosamente');
    }
}
