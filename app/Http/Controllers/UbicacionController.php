<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    public function readAll()
    {
        return Ubicacion::all();
    }

    // metodos http crud
    public function create(Request $request)
    {
        $data = $this->validateForm($request);

        return Ubicacion::insert($data);
    }

    public function update($id, Request $request)
    {
        $data = $this->validateForm($request);

        return Ubicacion::find($id)->update($data);
    }
    public function delete($id)
    {
        Ubicacion::find($id)->delete();
    }
    public function validateForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);
        return $validatedData;
    }
}
