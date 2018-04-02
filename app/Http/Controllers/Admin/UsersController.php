<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Area;

class UsersController extends Controller
{
	public function index(Request $request)
    {
        $items = User::all();
        $data = compact('items');

        return view('admin.users.index', $data);
    }

    public function create(Request $request)
    {
        $areas = Area::all()->pluck('nombre', 'id')->prepend('- Seleccionar -', '');
        $data = compact('areas');
        return view('admin.users.create', $data);
    }

    public function edit(Request $request, $expedienteTipoId)
    {
        $item = User::findOrFail($expedienteTipoId);
        $areas = Area::all()->pluck('nombre', 'id')->prepend('- Seleccionar -', '');

        $data = compact('item', 'areas');

        return view('admin.users.edit', $data);
    }

    public function store(Request $request)
    {
        $params = $request->only([
            'nombres',
            'apellidos',
            'email',
            'direccion',
            'telefono',
            'area_id',
        ]);

        $request->validate([
            'nombres' => 'required',
            'email' => 'required'
        ]);

        $item = new User;
        $item->fill($params);
        
        if (!empty($request->password)) {
            $item->password = bcrypt($request->password);
        }

        $item->save();

        return redirect('/admin/users')->with('successful_message', 'Se ha creado un nuevo usuario');
    }

    public function update(Request $request, $expedienteTipoId)
    {
        $request->validate([
            'nombres' => 'required',
            'email' => 'required'
        ]);

        $params = $request->only([
            'nombres',
            'apellidos',
            'email',
            'direccion',
            'telefono',
            'area_id',
        ]);

        $item = User::findOrFail($expedienteTipoId);
        $item->fill($params);

        if (!empty($request->password)) {
            $item->password = bcrypt($request->password);
        }

        $item->save();

        return redirect('/admin/users')->with('successful_message', 'Se ha editado el usuario exitosamente');
    }

    public function delete(Request $request, $expedienteTipoId)
    {
        $item = User::find($expedienteTipoId);
        $item->delete();

        return redirect('/admin/users')->with('successful_message', 'Se ha eliminado el usuario exitosamente');
    }
}
