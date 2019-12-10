<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Surtir;
use App\Maquina;
use App\Producto;
use Illuminate\Http\Request;

class surtirController extends Controller
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
        $maquinas = Maquina::All();
        $productos = Producto::All();
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
        $maquinas = Maquina::All();
        $productos = Producto::All();

        return view('surtir.edit', compact('surtir', 'maquinas', 'productos'));
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
