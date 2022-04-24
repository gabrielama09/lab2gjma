<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index()
    {
        $dataproduct = Productos::all();
        return view('productos.index', compact('dataproduct'));
    }

    public function create()
    {
        //return view('productos.create');
        return view('productos.create');
    }

    public function store(Request $request)
    {
        //
        $dataProducts = $request->except('_token', 'saveitem');
        Productos::insert($dataProducts);
//        return response()->json($dataProducts);
        return redirect('productos/');
    }


    public function show(Productos $productos)
    {
        //
    }

    public function edit($producto)
    {
        //
        $productos = Productos::findOrFail($producto);
        return view('productos.edit', compact('productos'));
    }


    public function update(Request $request, $id)
    {
        $productos = Productos::findOrFail($id);
        $productos->update($request->all());
        return redirect('productos/');
    }

    public function destroy($producto)
    {
        //
        $dataprod = Productos::find($producto);
        $dataprod->delete();
        return redirect('productos/');
    }
}
