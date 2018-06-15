<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Itemnav;
use Illuminate\Http\Request;

class ItemnavController extends Controller
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
            $itemnav = Itemnav::where('item_nav', 'LIKE', "%$keyword%")
                ->orWhere('contenido', 'LIKE', "%$keyword%")
                ->orWhere('estilo', 'LIKE', "%$keyword%")
                ->orWhere('activo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $itemnav = Itemnav::orderBy('id', 'ASC')->latest()->paginate($perPage);
        }

        return view('admin.itemnav.index', compact('itemnav'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.itemnav.create');
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
            'item_nav' => 'required|max:25',
			'enlace' => 'nullable|max:191',
			'contenido' => 'nullable'
		]);
        $requestData = $request->all();

        try {

            Itemnav::create($requestData);
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {

            flash('No se pudo realizar la peticion')->warning();
            
        }
        

        return redirect('admin/itemnav');
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
        $itemnav = Itemnav::findOrFail($id);

        return view('admin.itemnav.show', compact('itemnav'));
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
        $itemnav = Itemnav::findOrFail($id);

        return view('admin.itemnav.edit', compact('itemnav'));
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
            'item_nav' => 'required|max:25',
            'enlace' => 'nullable|max:191',
            'contenido' => 'nullable'
		]);
        $requestData = $request->all();

        try {
            
        $itemnav = Itemnav::findOrFail($id);
        $itemnav->update($requestData);

            flash('Guardado con exito')->success();

        } catch (\Exception $e) {

            flash('No se pudo realizar la peticion')->warning();
            
        }
        

        return redirect('admin/itemnav');
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
            
        Itemnav::destroy($id);
        flash('Realizado con exito')->success();

        } catch (\Exception $e) {

            flash('No se pudo realizar la peticion')->warning();
            
        }

        return redirect('admin/itemnav');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    
}
