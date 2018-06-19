<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tipopaquete;
use Illuminate\Http\Request;

class TipopaqueteController extends Controller
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
            $tipopaquete = Tipopaquete::where('tipo_paquete', 'LIKE', "%$keyword%")
                ->orWhere('detalle', 'LIKE', "%$keyword%")
                ->orWhere('enlace', 'LIKE', "%$keyword%")
                ->orWhere('totuloenlace', 'LIKE', "%$keyword%")
                ->orWhere('activo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tipopaquete = Tipopaquete::latest()->paginate($perPage);
        }

        return view('admin.tipopaquete.index', compact('tipopaquete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tipopaquete.create');
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
			'tipo_paquete' => 'required|max:25',
			'detalle' => 'required'
		]);
        $requestData = $request->all();
        
        

        try {
            Tipopaquete::create($requestData);
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/tipopaquete');
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
        $tipopaquete = Tipopaquete::findOrFail($id);

        return view('admin.tipopaquete.show', compact('tipopaquete'));
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
        $tipopaquete = Tipopaquete::findOrFail($id);

        return view('admin.tipopaquete.edit', compact('tipopaquete'));
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
			'tipo_paquete' => 'required|max:25',
			'detalle' => 'required'
		]);
        $requestData = $request->all();
        
        

        try {

            $tipopaquete = Tipopaquete::findOrFail($id);
            $tipopaquete->update($requestData);
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/tipopaquete');
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
        

        try {

            Tipopaquete::destroy($id);
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/tipopaquete');
    }
}
