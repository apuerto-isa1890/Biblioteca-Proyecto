<?php

namespace App\Http\Controllers;

use App\DataTables\CategoriaDataTable;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoriaDataTable $dataTable)
    {
        return $dataTable->render('Categoria.Index');
    }

    public function store(Request $request)
    {
        $request['user_id'] = auth()->user()->id;
        $categoria = Categoria::create($request->all());
        return Redirect::back();
    }
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return Redirect::back();
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->destroy();
        return Redirect::back();
    }

    public function json() {
        return response()->json(Categoria::where('status', true)->get());
    }
}
