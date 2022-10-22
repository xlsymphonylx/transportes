<?php

namespace App\Http\Controllers;

use App\Models\Piloto;
use Illuminate\Http\Request;

class PilotoController extends Controller
{
    public function readAll()
    {
        return Piloto::all();
    }

    // metodos http crud
    public function create(Request $request)
    {
        $data = $this->validateForm($request);

        return Piloto::insert($data);
    }

    public function update($id, Request $request)
    {
        $data = $this->validateForm($request);

        return Piloto::find($id)->update($data);
    }
    public function delete($id)
    {
        Piloto::find($id)->delete();
    }
    public function validateForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'dpi' => 'required',
            'number' => 'required',
        ]);
        return $validatedData;
    }
}
