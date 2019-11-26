<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Empleado;
use App\Empresa;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
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
            $empleado = Empleado::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('edad', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('correo', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('nivelEducativo', 'LIKE', "%$keyword%")
                ->orWhere('cargo', 'LIKE', "%$keyword%")
                ->orWhere('fechaIngreso', 'LIKE', "%$keyword%")
                ->orWhere('empresa_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $empleado = Empleado::latest()->paginate($perPage);
        }

        return view('empleado.index', compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $empresas = Empresa::All();
        return view('empleado.create', compact('empresas'));
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
			'nombre' => 'required|min:5|max:20',
			'correo' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        Empleado::create($requestData);

        return redirect('empleado')->with('flash_message', 'Empleado added!');
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
        $empleado = Empleado::findOrFail($id);

        return view('empleado.show', compact('empleado'));
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
        $empleado = Empleado::findOrFail($id);
        $empresas = Empresa::All();
        return view('empleado.edit', compact('empleado','empresas'));
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
			'nombre' => 'required|min:5|max:20',
			'correo' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        $empleado = Empleado::findOrFail($id);
        $empleado->update($requestData);

        return redirect('empleado')->with('flash_message', 'Empleado updated!');
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
        Empleado::destroy($id);

        return redirect('empleado')->with('flash_message', 'Empleado deleted!');
    }
}
