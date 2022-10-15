<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;

class TransportistaController extends Controller
{
    public function readAll()
    {
        return Transportista::all();
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
        ]);
        return $validatedData;
    }
}
