<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Itemsoporte;
use Illuminate\Http\Request;

class ItemsoporteController extends Controller
{
    public function get_toreajax(Request $request){
        if($request->ajax()){
            $perPage = 25;
            $itemsoporte = Itemsoporte::where('soporte_id', $request->id)->latest()->paginate($perPage);
            return view('admin.soporte.itemsoporte',compact('itemsoporte'));
        }
    }

    public function storeajax(Request $request)
    {
        if($request->ajax()){
            $itemsoporte = Itemsoporte::create($request->all());
            return response()->json($itemsoporte);
        }    
    }

    public function select_itemcrt(Request $request){
        if($request->ajax()){
            $itemsoporte = Itemsoporte::where('id', $request->id)->first();
            return response()->json($itemsoporte);
        }
    }

    public function updateitemcrt(Request $request, $id){
        if($request->ajax()){
            $itemsoporte = Itemsoporte::find($id);
            $itemsoporte->item_soporte = $request->item_soporte;
            $itemsoporte->titulo = $request->titulo;
            $itemsoporte->contenido = $request->contenido;
            $itemsoporte->enlace = $request->enlace;
            $itemsoporte->tituloenlace = $request->tituloenlace;
            $itemsoporte->icono = $request->icono;
            $itemsoporte->estado = $request->estado;
            $itemsoporte->tituloanexo = $request->tituloanexo;
            $itemsoporte->textoanexo = $request->textoanexo;
            $itemsoporte->soporte_id = $request->soporte_id;

            $resultado = $itemsoporte->save();

                
            if($resultado){
                return response()->json(['success'=>'true','soporte_id'=>$request->soporte_id,'item'=>$itemsoporte]);
                //return response()->json($request);
            }else{
                return response()->json(['success'=>'false']);
            }
        }
    }

    public function delete_itemcrt(Request $request){
        if($request->ajax()){
            $itemsoporte = Itemsoporte::where('id', $request->id)->delete();
            return response()->json($itemsoporte);
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
            $itemsoporte = Itemsoporte::where('item_soporte', 'LIKE', "%$keyword%")
                ->orWhere('titulo', 'LIKE', "%$keyword%")
                ->orWhere('contenido', 'LIKE', "%$keyword%")
                ->orWhere('enlace', 'LIKE', "%$keyword%")
                ->orWhere('icono', 'LIKE', "%$keyword%")
                ->orWhere('tituloanexo', 'LIKE', "%$keyword%")
                ->orWhere('textoanexo', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('soporte_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $itemsoporte = Itemsoporte::latest()->paginate($perPage);
        }

        return view('admin.itemsoporte.index', compact('itemsoporte'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.itemsoporte.create');
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
        
        Itemsoporte::create($requestData);

        return redirect('admin/itemsoporte')->with('flash_message', 'Itemsoporte added!');
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
        $itemsoporte = Itemsoporte::findOrFail($id);

        return view('admin.itemsoporte.show', compact('itemsoporte'));
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
        $itemsoporte = Itemsoporte::findOrFail($id);

        return view('admin.itemsoporte.edit', compact('itemsoporte'));
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
        
        $itemsoporte = Itemsoporte::findOrFail($id);
        $itemsoporte->update($requestData);

        return redirect('admin/itemsoporte')->with('flash_message', 'Itemsoporte updated!');
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
        Itemsoporte::destroy($id);

        return redirect('admin/itemsoporte')->with('flash_message', 'Itemsoporte deleted!');
    }
}
