<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function readAll()
    {
        return Contacto::all();
    }

    // metodos http crud
    public function create(Request $request)
    {
        $data = $this->validateForm($request);

        return Contacto::insert($data);
    }

    public function update($id, Request $request)
    {
        $data = $this->validateForm($request);

        return Contacto::find($id)->update($data);
    }
    public function delete($id)
    {
        Contacto::find($id)->delete();
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
