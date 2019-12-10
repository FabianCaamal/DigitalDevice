<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Stock;
use App\Maquina;
use App\Producto;
use Illuminate\Http\Request;

class stockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $stock = Stock::where('maquina_id', 'LIKE', "%$keyword%")
                ->orWhere('producto_id', 'LIKE', "%$keyword%")
                ->orWhere('cantidad', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $stock = Stock::latest()->paginate($perPage);
        }

        return view('stock.index', compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $maquinas = Maquina::All();
        $productos = Producto::All();

        return view('stock.create', compact('maquinas', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Stock::create($requestData);

        return redirect('stock')->with('flash_message', 'Stock added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $stock = Stock::findOrFail($id);

        return view('stock.show', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $stock = Stock::findOrFail($id);

        $maquinas = Maquina::All();
        $productos = Producto::All();

        return view('stock.edit', compact('stock', 'maquinas', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $stock = Stock::findOrFail($id);
        $stock->update($requestData);

        return redirect('stock')->with('flash_message', 'Stock updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Stock::destroy($id);

        return redirect('stock')->with('flash_message', 'Stock deleted!');
    }
}
