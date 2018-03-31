<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;

class AreasController extends Controller
{
    public function index(Request $request)
    {
        $items = Area::all();
        $data = compact('items');

        return view('admin.areas.index', $data);
    }

    public function create(Request $request)
    {
        return view('admin.areas.create');
    }

    public function edit(Request $request, $areaId)
    {
        $item = Area::findOrFail($areaId);
        $data = compact('item');

        return view('admin.areas.edit', $data);
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

        $item = new Area;
        $item->fill($params);
        $item->save();

        return redirect('/admin/areas')->with('successful_message', 'Se ha creado una nueva área');
    }

    public function update(Request $request, $areaId)
    {
        $params = $request->only([
            'nombre',
            'descripcion',
        ]);

        $item = Area::findOrFail($areaId);
        $item->fill($params);
        $item->save();

        return redirect('/admin/areas')->with('successful_message', 'Se ha editado el área exitosamente');
    }

    public function delete(Request $request, $areaId)
    {
        $item = Area::find($areaId);
        $item->delete();

        return redirect('/admin/areas')->with('successful_message', 'Se ha eliminado el área exitosamente');
    }
}
