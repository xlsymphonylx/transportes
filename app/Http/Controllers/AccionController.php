<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use Illuminate\Http\Request;

class AccionController extends Controller
{
    public function readAll()
    {
        $actions = Accion::get();
        foreach ($actions as $key => $action) {
            $actions[$key]->tipoAccionName = $action->tipoAccion->description;
            $actions[$key]->destinoName = $action->destino->name;
            $actions[$key]->procedenciaName = $action->procedencia->name;
            $actions[$key]->cabezalName = $action->cabezal->placa;
            $actions[$key]->transportistaName = $action->cabezal->transportista->name;
            $actions[$key]->pilotoName = $action->cabezal->piloto->name;
            $actions[$key]->pilotoName = $action->cabezal->piloto->name;
            $actions[$key]->bodegaDestino = $action->bodega->name;
        }
        return response()->json($actions);
    }
    public function readOne($id)
    {
        $action = Accion::find($id);
        $action->tipoAccionName = $action->tipoAccion->description;
        return response()->json($action);
    }

    // metodos http crud
    public function create(Request $request)
    {
        $data = $this->validateForm($request);
        $data['fecha'] = date('Y-m-d H:i:s');
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
            'carga' => 'required',
            'tipo_accion_id' => 'required',
            'destino_id' => 'required',
            'procedencia_id' => 'required',
            'cabezal_id' => 'required',
            'bodega_destino_id' => 'required',
            'numero_contenedor' => 'required'
        ]);
        return $validatedData;
    }
}
