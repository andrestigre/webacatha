<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CaracteristicaPaquete;
use Illuminate\Http\Request;

class CaracteristicaPaqueteController extends Controller
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
            $caracteristicapaquete = CaracteristicaPaquete::where('car_paquete', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('paquete_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $caracteristicapaquete = CaracteristicaPaquete::latest()->paginate($perPage);
        }

        return view('admin.caracteristica-paquete.index', compact('caracteristicapaquete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.caracteristica-paquete.create');
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
        
        CaracteristicaPaquete::create($requestData);

        return redirect('admin/caracteristica-paquete')->with('flash_message', 'CaracteristicaPaquete added!');
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
        $caracteristicapaquete = CaracteristicaPaquete::findOrFail($id);

        return view('admin.caracteristica-paquete.show', compact('caracteristicapaquete'));
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
        $caracteristicapaquete = CaracteristicaPaquete::findOrFail($id);

        return view('admin.caracteristica-paquete.edit', compact('caracteristicapaquete'));
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
        
        $caracteristicapaquete = CaracteristicaPaquete::findOrFail($id);
        $caracteristicapaquete->update($requestData);

        return redirect('admin/caracteristica-paquete')->with('flash_message', 'CaracteristicaPaquete updated!');
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
        CaracteristicaPaquete::destroy($id);

        return redirect('admin/caracteristica-paquete')->with('flash_message', 'CaracteristicaPaquete deleted!');
    }
}
