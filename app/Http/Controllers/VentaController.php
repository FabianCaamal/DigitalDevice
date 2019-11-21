<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
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
            $venta = Venta::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('maquina_id', 'LIKE', "%$keyword%")
                ->orWhere('producto_id', 'LIKE', "%$keyword%")
                ->orWhere('Precio', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $venta = Venta::latest()->paginate($perPage);
        }

        return view('venta.index', compact('venta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('venta.create');
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
        $this->validate($request, [
			'Fecha' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        Venta::create($requestData);

        return redirect('venta')->with('flash_message', 'Venta added!');
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
        $ventum = Venta::findOrFail($id);

        return view('venta.show', compact('ventum'));
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
        $ventum = Venta::findOrFail($id);

        return view('venta.edit', compact('ventum'));
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
        $this->validate($request, [
			'Fecha' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        $ventum = Venta::findOrFail($id);
        $ventum->update($requestData);

        return redirect('venta')->with('flash_message', 'Venta updated!');
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
        Venta::destroy($id);

        return redirect('venta')->with('flash_message', 'Venta deleted!');
    }
}
