<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ExpedienteTipo;

class ExpedienteTiposController extends Controller
{   
    public function index(Request $request)
    {
        $items = ExpedienteTipo::all();
        $data = compact('items');

        return view('admin.expediente-tipos.index', $data);
    }

    public function create(Request $request)
    {
        return view('admin.expediente-tipos.create');
    }

    public function edit(Request $request, $expedienteTipoId)
    {
        $item = ExpedienteTipo::findOrFail($expedienteTipoId);
        $data = compact('item');

        return view('admin.expediente-tipos.edit', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $params = $request->only([
            'nombre',
            'descripcion',
        ]);

        $item = new ExpedienteTipo;
        $item->fill($params);
        $item->save();

        return redirect('/admin/expediente-tipos')->with('successful_message', 'Se ha creado un nuevo tipo de expediente');
    }

    public function update(Request $request, $expedienteTipoId)
    {
        $params = $request->only([
            'nombre',
            'descripcion',
        ]);

        $item = ExpedienteTipo::findOrFail($expedienteTipoId);
        $item->fill($params);
        $item->save();

        return redirect('/admin/expediente-tipos')->with('successful_message', 'Se ha editado el tipo de expediente exitosamente');
    }

    public function delete(Request $request, $expedienteTipoId)
    {
        $item = ExpedienteTipo::find($expedienteTipoId);
        $item->delete();

        return redirect('/admin/expediente-tipos')->with('successful_message', 'Se ha eliminado el tipo de expediente exitosamente');
    }
}
