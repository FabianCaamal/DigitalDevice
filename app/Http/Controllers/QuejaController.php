<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Empresa;
use App\Queja;
use Illuminate\Http\Request;

class QuejaController extends Controller
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
            $queja = Queja::where('usuario_id', 'LIKE', "%$keyword%")
                ->orWhere('empresa_id', 'LIKE', "%$keyword%")
                ->orWhere('detalles', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $queja = Queja::latest()->paginate($perPage);
        }

        return view('queja.index', compact('queja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $usuarios = Usuario::All();
        $empresas = Empresa::All();
        return view('queja.create', compact('usuarios', 'empresas'));
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
			'detalles' => 'required|min:5|max:100'
		]);
        $requestData = $request->all();
        
        Queja::create($requestData);

        return redirect('queja')->with('flash_message', 'Queja added!');
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
        $queja = Queja::findOrFail($id);

        return view('queja.show', compact('queja'));
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
        $queja = Queja::findOrFail($id);

        $usuarios = Usuario::All();
        $empresas = Empresa::All();

        return view('queja.edit', compact('queja', 'usuarios', 'empresas'));
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
			'detalles' => 'required|min:5|max:100'
		]);
        $requestData = $request->all();
        
        $queja = Queja::findOrFail($id);
        $queja->update($requestData);

        return redirect('queja')->with('flash_message', 'Queja updated!');
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
        Queja::destroy($id);

        return redirect('queja')->with('flash_message', 'Queja deleted!');
    }
}
