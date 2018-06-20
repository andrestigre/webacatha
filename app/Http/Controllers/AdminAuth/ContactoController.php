<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contacto;
use Illuminate\Http\Request;
use App\Itemnav;

class ContactoController extends Controller
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
            $contacto = Contacto::where('titulo', 'LIKE', "%$keyword%")
                ->orWhere('contenido', 'LIKE', "%$keyword%")
                ->orWhere('enlaceboton', 'LIKE', "%$keyword%")
                ->orWhere('textoboton', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('social_fb', 'LIKE', "%$keyword%")
                ->orWhere('social_tw', 'LIKE', "%$keyword%")
                ->orWhere('social_gg', 'LIKE', "%$keyword%")
                ->orWhere('social_in', 'LIKE', "%$keyword%")
                ->orWhere('latitud', 'LIKE', "%$keyword%")
                ->orWhere('longitud', 'LIKE', "%$keyword%")
                ->orWhere('section_color', 'LIKE', "%$keyword%")
                ->orWhere('itemnav_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $contacto = Contacto::latest()->paginate($perPage);
        }

        return view('admin.contacto.index', compact('contacto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $itemsnav = Itemnav::where('activo','1')->pluck('item_nav', 'id');

        return view('admin.contacto.create',compact('itemsnav'));
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
        

        try {
            Contacto::create($requestData);
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/contacto');
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

        return view('admin.contacto.show', compact('contacto'));
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
        $itemsnav = Itemnav::where('activo','1')->pluck('item_nav', 'id');

        return view('admin.contacto.edit', compact('contacto','itemsnav'));
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
        
        

        try {
            $contacto = Contacto::findOrFail($id);
        $contacto->update($requestData);
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/contacto');
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
            Contacto::destroy($id);
            flash('Realizado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/contacto');
    }
}
