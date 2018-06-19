<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Paquete;
use App\Tipopaquete;
use Illuminate\Http\Request;

class PaqueteController extends Controller
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
            $paquete = Paquete::where('item_paquete', 'LIKE', "%$keyword%")
                ->orWhere('detalle', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('tipopaquete_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $paquete = Paquete::latest()->paginate($perPage);
        }

        return view('admin.paquete.index', compact('paquete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        $tipospaquetes = Tipopaquete::where('activo','1')->pluck('tipo_paquete', 'id');
        return view('admin.paquete.create', compact('tipospaquetes'));
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
            'precio' => 'nullable|numeric|min:0'
        ]);
        
        
        $requestData = $request->all();
        

        try {
            Paquete::create($requestData);
            flash('Guardado con exito')->success();
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/paquete')->with('flash_message', 'Paquete added!');
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
        $paquete = Paquete::findOrFail($id);

        return view('admin.paquete.show', compact('paquete'));
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
        $paquete = Paquete::findOrFail($id);
        $tipospaquetes = Tipopaquete::where('activo','1')->pluck('tipo_paquete', 'id');
        return view('admin.paquete.edit', compact('paquete','tipospaquetes'));
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
            'precio' => 'nullable|numeric|min:0'
        ]);
        
        $requestData = $request->all();       

        try {
            $paquete = Paquete::findOrFail($id);
            $paquete->update($requestData);
            flash('Guardado con exito')->success();
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/paquete')->with('flash_message', 'Paquete updated!');
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
        Paquete::destroy($id);

        return redirect('admin/paquete')->with('flash_message', 'Paquete deleted!');
    }
}
