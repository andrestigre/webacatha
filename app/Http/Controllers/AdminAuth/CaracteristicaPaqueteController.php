<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CaracteristicaPaquete;
use Illuminate\Http\Request;

class CaracteristicaPaqueteController extends Controller
{
    public function get_toreajax(Request $request){
        if($request->ajax()){
            $perPage = 25;
            $caracteristicapaquete = CaracteristicaPaquete::where('paquete_id', $request->id)->latest()->paginate($perPage);
            return view('admin.paquete.itemchar',compact('caracteristicapaquete'));
        }
    }

    public function storeajax(Request $request)
    {
        if($request->ajax()){
            $caracteristicapaquete = CaracteristicaPaquete::create($request->all());
            return response()->json($caracteristicapaquete);
        }    
    }

    public function select_itemcrt(Request $request){
        if($request->ajax()){
            $caracteristicapaquete = CaracteristicaPaquete::where('id', $request->id)->first();
            return response()->json($caracteristicapaquete);
        }
    }

    public function updateitemcrt(Request $request, $id){
        if($request->ajax()){
            $caracteristicapaquete = CaracteristicaPaquete::find($id);
            $caracteristicapaquete->car_paquete = $request->car_paquete;
            $caracteristicapaquete->paquete_id = $request->paquete_id;
            $caracteristicapaquete->estado = $request->estado;

            $resultado = $caracteristicapaquete->save();

                
            if($resultado){
                return response()->json(['success'=>'true','paquete_id'=>$request->paquete_id,'item'=>$caracteristicapaquete]);
            }else{
                return response()->json(['success'=>'false']);
            }
        }
    }

    public function delete_itemcrt(Request $request){
        if($request->ajax()){
            $caracteristicapaquete = CaracteristicaPaquete::where('id', $request->id)->delete();
            return response()->json($caracteristicapaquete);
        }
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
