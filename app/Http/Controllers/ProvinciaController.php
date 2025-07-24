<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Provincia;
use Illuminate\View\View;

class ProvinciaController extends Controller
{
    public function listar(): View
    {
        //Recupera todas las provincias de la base de datos
        $provincias = Provincia::all();

        //Retorna la vista del listado de provincias y pasa los datos
        return view('lista-provincias', compact('provincias'));
    }

    public function importar()
    {
        $response = Http::get('https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre');

        if ($response->successful()) {
            $provincias = $response->json()['provincias'];

            foreach ($provincias as $provincia) {
                Provincia::updateOrCreate(
                    ['id' => $provincia['id']],
                    ['nombre' => $provincia['nombre']]
                );
            }

            return response()->json(['mensaje' => 'Provincias importadas correctamente.']);
        }

        return response()->json(['error' => 'No se pudo obtener la información.'], 500);
    }
}