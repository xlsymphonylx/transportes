<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;

class TransportistaController extends Controller
{
    public function readAll()
    {
        $transportistas = Transportista::get();
        foreach ($transportistas as $key => $transportista) {
            $transportistas[$key]->contactoName = $transportista->contacto->name;
        }
        return response()->json($transportistas);
    }
    public function readOne($id)
    {
        $transportista = Transportista::find($id);
        $transportista->ubicacionName = $transportista->ubicacion->name;
        return response()->json($transportista);
    }
    // metodos http crud
    public function create(Request $request)
    {
        $data = $this->validateForm($request);

        return Transportista::insert($data);
    }

    public function update($id, Request $request)
    {
        $data = $this->validateForm($request);

        return Transportista::find($id)->update($data);
    }
    public function delete($id)
    {
        Transportista::find($id)->delete();
    }
    public function validateForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contacto_id' => 'required'
        ]);
        return $validatedData;
    }
}
