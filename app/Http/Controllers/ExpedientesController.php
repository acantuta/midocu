<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expediente;
use App\Models\Persona;
use App\Models\ExpedienteTipo;

class ExpedientesController extends Controller
{
	public function index(Request $request)
    {
        $items = Expediente::all();

        $data = compact('items');

        return view('expedientes.index', $data);
    }

    public function create(Request $request)
    {
        $personas = Persona::all()->pluck('nombre_completo', 'id');
        $origenes = ['interno' => 'interno', 'externo' => 'externo'];
        $tiposExpediente = ExpedienteTipo::all()->pluck('nombre', 'id');
        $prioridades = ['normal' => 'normal', 'urgente' => 'urgente'];

        $data = compact('personas', 'origenes', 'tiposExpediente', 'prioridades');

        return view('expedientes.create', $data);
    }

    public function edit(Request $request, $expedienteTipoId)
    {
        $item = Expediente::findOrFail($expedienteTipoId);
        
        $personas = Persona::all()->pluck('nombre_completo', 'id');
        $origenes = ['interno' => 'interno', 'externo' => 'externo'];
        $tiposExpediente = ExpedienteTipo::all()->pluck('nombre', 'id');
        $prioridades = ['normal' => 'normal', 'urgente' => 'urgente'];

        $data = compact('personas', 'origenes', 'tiposExpediente', 'prioridades', 'item');

        return view('expedientes.edit', $data);
    }

    public function store(Request $request)
    {
        $params = $request->all();

        $request->validate([
            'origen' => 'required',
            'expediente_tipo_id' => 'required',
            'asunto' => 'required',
            'prioridad' => 'required',
        ]);

        $item = new Expediente;
        $item->fill($params);

        $item->save();

        return redirect('/expedientes')->with('successful_message', 'Se ha creado un nuevo expediente');
    }

    public function update(Request $request, $expedienteTipoId)
    {
        $request->validate([
            'origen' => 'required',
            'expediente_tipo_id' => 'required',
            'asunto' => 'required',
            'prioridad' => 'required',
        ]);

        $params = $request->all();

        $item = Expediente::findOrFail($expedienteTipoId);
        $item->fill($params);

        $item->save();

        return redirect('/expedientes')->with('successful_message', 'Se ha editado exitosamente');
    }

    public function delete(Request $request, $expedienteTipoId)
    {
        $item = Expediente::find($expedienteTipoId);
        $item->delete();

        return redirect('/expedientes')->with('successful_message', 'Se ha eliminado exitosamente');
    }
}
