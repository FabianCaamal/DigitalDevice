<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contacto;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 50;

        if (!empty($keyword)) {
            $contactos = Contacto::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('correo', 'LIKE', "%$keyword%")
                ->orWhere('genero', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $contactos = Contacto::latest()->paginate($perPage);
        }

        return view('contactos.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('contactos.create');
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
			'nombre' => 'required|min:3|max:50',
			'correo' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        Contacto::create($requestData);

        return redirect('personal/contactos')->with('flash_message', 'Contacto added!');
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
        $contacto = Contacto::findOrFail($id);

        return view('contactos.show', compact('contacto'));
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
        $contacto = Contacto::findOrFail($id);

        return view('contactos.edit', compact('contacto'));
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
			'nombre' => 'required|min:3|max:50',
			'correo' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        $contacto = Contacto::findOrFail($id);
        $contacto->update($requestData);

        return redirect('personal/contactos')->with('flash_message', 'Contacto updated!');
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
        Contacto::destroy($id);

        return redirect('personal/contactos')->with('flash_message', 'Contacto deleted!');
    }
}
