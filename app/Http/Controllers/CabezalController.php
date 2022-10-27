<?php

namespace App\Http\Controllers;

use App\Models\Cabezal;
use Illuminate\Http\Request;

class CabezalController extends Controller
{
    public function readAll()
    {
        $cabezales = Cabezal::get();
        foreach ($cabezales as $key => $cabezal) {
            $cabezales[$key]->transportistaName = $cabezal->transportista->name;
            $cabezales[$key]->pilotoName = $cabezal->piloto->name;
        }
        return response()->json($cabezales);
    }
    public function readOne($id)
    {
        $cabezal = Cabezal::find($id);
        $cabezal->transportistaName = $cabezal->transportista->name;
        $cabezal->pilotoName = $cabezal->piloto->name;
        return response()->json($cabezal);
    }
    // metodos http crud
    public function create(Request $request)
    {
        $data = $this->validateForm($request);

        return Cabezal::insert($data);
    }

    public function update($id, Request $request)
    {
        $data = $this->validateForm($request);

        return Cabezal::find($id)->update($data);
    }
    public function delete($id)
    {
        Cabezal::find($id)->delete();
    }
    public function validateForm(Request $request)
    {
        $validatedData = $request->validate([
            'placa' => 'required',
            'marca' => 'required',
            'transportista_id' => 'required',
            'piloto_id' => 'required',
        ]);
        return $validatedData;
    }
}
