<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Trabajo;
use Illuminate\Http\Request;

class TrabajoController extends Controller
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
            $trabajo = Trabajo::where('Empleado', 'LIKE', "%$keyword%")
                ->orWhere('UbicacionMaquina', 'LIKE', "%$keyword%")
                ->orWhere('CantidadAsignada', 'LIKE', "%$keyword%")
                ->orWhere('FechaEncargo', 'LIKE', "%$keyword%")
                ->orWhere('EstatusTrabajo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $trabajo = Trabajo::latest()->paginate($perPage);
        }

        return view('trabajo.index', compact('trabajo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('trabajo.create');
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
			'Empleado' => 'required|min:5|max:20',
			'FechaEncargo' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        Trabajo::create($requestData);

        return redirect('trabajo')->with('flash_message', 'Trabajo added!');
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
        $trabajo = Trabajo::findOrFail($id);

        return view('trabajo.show', compact('trabajo'));
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
        $trabajo = Trabajo::findOrFail($id);

        return view('trabajo.edit', compact('trabajo'));
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
			'Empleado' => 'required|min:5|max:20',
			'FechaEncargo' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        $trabajo = Trabajo::findOrFail($id);
        $trabajo->update($requestData);

        return redirect('trabajo')->with('flash_message', 'Trabajo updated!');
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
        Trabajo::destroy($id);

        return redirect('trabajo')->with('flash_message', 'Trabajo deleted!');
    }
}
