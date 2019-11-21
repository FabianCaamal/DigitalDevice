<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
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
            $maquina = Maquina::where('codigo', 'LIKE', "%$keyword%")
                ->orWhere('longitud', 'LIKE', "%$keyword%")
                ->orWhere('latitud', 'LIKE', "%$keyword%")
                ->orWhere('DineroAlmacenado', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $maquina = Maquina::latest()->paginate($perPage);
        }

        return view('maquina.index', compact('maquina'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('maquina.create');
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
			'longitud' => 'required|min:5|max:30',
			'latitud' => 'required|min:5|max:30'
		]);
        $requestData = $request->all();
        
        Maquina::create($requestData);

        return redirect('maquina')->with('flash_message', 'Maquina added!');
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
        $maquina = Maquina::findOrFail($id);

        return view('maquina.show', compact('maquina'));
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
        $maquina = Maquina::findOrFail($id);

        return view('maquina.edit', compact('maquina'));
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
			'longitud' => 'required|min:5|max:30',
			'latitud' => 'required|min:5|max:30'
		]);
        $requestData = $request->all();
        
        $maquina = Maquina::findOrFail($id);
        $maquina->update($requestData);

        return redirect('maquina')->with('flash_message', 'Maquina updated!');
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
        Maquina::destroy($id);

        return redirect('maquina')->with('flash_message', 'Maquina deleted!');
    }
}
