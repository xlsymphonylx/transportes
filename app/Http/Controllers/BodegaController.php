<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    public function readAll()
    {
        $bodegas = Bodega::get();
        foreach ($bodegas as $key => $bodega) {
            $bodegas[$key]->ubicacionName = $bodega->ubicacion->name;
        }
        return response()->json($bodegas);
    }
    public function readOne($id)
    {
        $data = Bodega::find($id);
        $data->ubicacionName = $data->ubicacion->name;
        return response()->json($data);
    }
    // metodos http crud
    public function create(Request $request)
    {
        $data = $this->validateForm($request);

        return Bodega::insert($data);
    }

    public function update($id, Request $request)
    {
        $data = $this->validateForm($request);

        return Bodega::find($id)->update($data);
    }
    public function delete($id)
    {
        Bodega::find($id)->delete();
    }
    public function validateForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'ubicacion_id' => 'required',

        ]);
        return $validatedData;
    }
}
