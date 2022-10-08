<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabezalController extends Controller
{
    public function readAll()
    {
        return Cabezal::all();
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
        ]);
        return $validatedData;
    }
}
