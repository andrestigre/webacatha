<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Precio;
use App\Itemnav;
use Illuminate\Http\Request;

class PreciosController extends Controller
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
            $precios = Precio::where('item_nav', 'LIKE', "%$keyword%")
                ->orWhere('contenido', 'LIKE', "%$keyword%")
                ->orWhere('section_color', 'LIKE', "%$keyword%")
                ->orWhere('activo', 'LIKE', "%$keyword%")
                ->orWhere('enlace', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $precios = Precio::latest()->paginate($perPage);
        }

        return view('admin.precios.index', compact('precios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $itemsnav = Itemnav::where('activo','1')->pluck('item_nav', 'id');
        return view('admin.precios.create',compact('itemsnav'));
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
			'itemnav_id' => 'required'
		]);
        $requestData = $request->all();
        

        try {
            
        Precio::create($requestData);
            
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
            
        }

        return redirect('admin/precios');
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
        $precio = Precio::findOrFail($id);

        return view('admin.precios.show', compact('precio'));
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
        $precio = Precio::findOrFail($id);
        $itemsnav = Itemnav::where('activo','1')->pluck('item_nav', 'id');


        return view('admin.precios.edit', compact('precio','itemsnav'));
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
			'itemnav_id' => 'required'
		]);
        $requestData = $request->all();
        
       

        try {
            
        $precio = Precio::findOrFail($id);
        $precio->update($requestData);
            
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
            
        }

        return redirect('admin/precios');
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
            
        Precio::destroy($id);
            
            flash('Realizado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
            
        }

        return redirect('admin/precios');
    }
}
