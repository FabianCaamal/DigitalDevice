<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Surtir;
use App\Maquina;
use Illuminate\Http\Request;

class SurtirController extends Controller
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
            $surtir = Surtir::where('maquina_id', 'LIKE', "%$keyword%")
                ->orWhere('producto_id', 'LIKE', "%$keyword%")
                ->orWhere('cantidad', 'LIKE', "%$keyword%")
                ->orWhere('fechaRealizada', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $surtir = Surtir::latest()->paginate($perPage);
        }

        return view('surtir.index', compact('surtir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $productos = Producto::All();
        $maquinas = Maquina::All();
        return view('surtir.create', compact('productos', 'maquinas'));
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

        $stock = Stock::where('maquina_id', $requestData->maquina_id)->first();
        $stock->cantidad = $stock->cantidad + $requestData->cantidad;
        $stock->save();
        
        Surtir::create($requestData);

        return redirect('surtir')->with('flash_message', 'Surtir added!');
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
        $surtir = Surtir::findOrFail($id);

        return view('surtir.show', compact('surtir'));
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
        $surtir = Surtir::findOrFail($id);        
        $productos = Producto::All();
        $maquinas = Maquina::All();
        return view('surtir.edit', compact('surtir', 'productos','maquinas'));
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
        
        $surtir = Surtir::findOrFail($id);
        $surtir->update($requestData);

        return redirect('surtir')->with('flash_message', 'Surtir updated!');
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
        Surtir::destroy($id);

        return redirect('surtir')->with('flash_message', 'Surtir deleted!');
    }
}
