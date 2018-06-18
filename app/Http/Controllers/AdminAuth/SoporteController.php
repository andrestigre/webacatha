<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Soporte;
use Illuminate\Http\Request;
use App\Itemnav;

class SoporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => 'logout']);
    }
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
            $soporte = Soporte::where('itemnav_id', 'LIKE', "%$keyword%")
                ->orWhere('detalle', 'LIKE', "%$keyword%")
                ->orWhere('section_color', 'LIKE', "%$keyword%")
                ->orWhere('activo', 'LIKE', "%$keyword%")
                ->orWhere('enlace', 'LIKE', "%$keyword%")
                ->orWhere('tituloenlace', 'LIKE', "%$keyword%")
                ->orWhere('titulofinal', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $soporte = Soporte::latest()->paginate($perPage);
        }

        return view('admin.soporte.index', compact('soporte'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $itemsnav = Itemnav::where('activo','1')->pluck('item_nav', 'id');
        return view('admin.soporte.create', compact('itemsnav'));
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
			'itemnav_id' => 'required|max:25',
            'titulo' => 'required',
			'detalle' => 'required'
		]);
        $requestData = $request->all();

        try {
            
        Soporte::create($requestData);
        flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }


        return redirect('admin/soporte');
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
        $soporte = Soporte::findOrFail($id);

        return view('admin.soporte.show', compact('soporte'));
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
        $itemsnav = Itemnav::where('activo','1')->pluck('item_nav', 'id');

        $soporte = Soporte::findOrFail($id);

        return view('admin.soporte.edit', compact('soporte','itemsnav'));
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
			'itemnav_id' => 'required|max:25',
            'titulo' => 'required',
			'detalle' => 'required'
		]);
        $requestData = $request->all();
        

        

        try {
            
        $soporte = Soporte::findOrFail($id);
        $soporte->update($requestData);
        flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/soporte');
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
        Soporte::destroy($id);

        return redirect('admin/soporte');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    
}
