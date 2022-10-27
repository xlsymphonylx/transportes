<?php

namespace App\Http\Controllers;

use App\Models\TipoAccion;
use Illuminate\Http\Request;

class TipoAccionController extends Controller
{
    public function readAll()
    {
        $tipoAcciones = TipoAccion::get();
        return response()->json($tipoAcciones);
    }
    public function readOne($id)
    {
        $tipoAccion = TipoAccion::find($id);
        return response()->json($tipoAccion);
    }
    // metodos http crud
    public function create(Request $request)
    {
        $data = $this->validateForm($request);

        return TipoAccion::insert($data);
    }

    public function update($id, Request $request)
    {
        $data = $this->validateForm($request);

        return TipoAccion::find($id)->update($data);
    }
    public function delete($id)
    {
        TipoAccion::find($id)->delete();
    }
    public function validateForm(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
        ]);
        return $validatedData;
    }
}
