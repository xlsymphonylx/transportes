<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use Illuminate\Http\Request;

class AccionController extends Controller
{
    public function readAll()
    {
        return Accion::all();
    }

    // metodos http crud
    public function create(Request $request)
    {
        $data = $this->validateForm($request);

        return Accion::insert($data);
    }

    public function update($id, Request $request)
    {
        $data = $this->validateForm($request);

        return Accion::find($id)->update($data);
    }
    public function delete($id)
    {
        Accion::find($id)->delete();
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
