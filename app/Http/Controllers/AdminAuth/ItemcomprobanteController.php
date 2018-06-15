<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Itemcomprobante;
use Illuminate\Http\Request;

class ItemcomprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function get_toreajax(Request $request){
        if($request->ajax()){
            $perPage = 25;
            $itemcomprobante = Itemcomprobante::where('comprobante_id', $request->id)->latest()->paginate($perPage);
            return view('admin.comprobante.itemcomprobante',compact('itemcomprobante'));
        }
    }

    public function storeajax(Request $request)
    {
        if($request->ajax()){
            $itemcomprobante = Itemcomprobante::create($request->all());
            return response()->json($itemcomprobante);
        }    
    }

    public function select_itemcrt(Request $request){
        if($request->ajax()){
            $itemcomprobante = Itemcomprobante::where('id', $request->id)->first();
            return response()->json($itemcomprobante);
        }
    }

    public function updateitemcrt(Request $request, $id){
        if($request->ajax()){
            $itemcomprobante = Itemcomprobante::find($id);
            $itemcomprobante->item_comprobante = $request->item_comprobante;
            $itemcomprobante->contenido = $request->contenido;
            $itemcomprobante->efecto = $request->efecto;
            $itemcomprobante->estado = $request->estado;
            $itemcomprobante->textalinear = $request->textalinear;
            $itemcomprobante->comprobante_id = $request->comprobante_id;

            $resultado = $itemcomprobante->save();

                
            if($resultado){
                return response()->json(['success'=>'true','comprobante_id'=>$request->comprobante_id,'item'=>$itemcomprobante]);
                //return response()->json($request);
            }else{
                return response()->json(['success'=>'false']);
            }
        }
    }

    public function delete_itemcrt(Request $request){
        if($request->ajax()){
            $itemcomprobante = Itemcomprobante::where('id', $request->id)->delete();
            return response()->json($itemcomprobante);
        }
    }

    public function listartodo(){
            $perPage = 25;
            $itemcomprobante = Itemcomprobante::latest()->paginate($perPage);
            return view('admin.comprobante.itemcomprobante',compact('itemcomprobante'));
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $itemcomprobante = Itemcomprobante::where('item_comprobante', 'LIKE', "%$keyword%")
                ->orWhere('contenido', 'LIKE', "%$keyword%")
                ->orWhere('efecto', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('comprobante_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $itemcomprobante = Itemcomprobante::latest()->paginate($perPage);
        }

        return view('admin.itemcomprobante.index', compact('itemcomprobante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.itemcomprobante.create');
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
        
        Itemcomprobante::create($requestData);

        return redirect('admin/itemcomprobante')->with('flash_message', 'Itemcomprobante added!');
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
        $itemcomprobante = Itemcomprobante::findOrFail($id);

        return view('admin.itemcomprobante.show', compact('itemcomprobante'));
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
        $itemcomprobante = Itemcomprobante::findOrFail($id);

        return view('admin.itemcomprobante.edit', compact('itemcomprobante'));
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
        
        $itemcomprobante = Itemcomprobante::findOrFail($id);
        $itemcomprobante->update($requestData);

        return redirect('admin/itemcomprobante')->with('flash_message', 'Itemcomprobante updated!');
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
        Itemcomprobante::destroy($id);

        return redirect('admin/itemcomprobante')->with('flash_message', 'Itemcomprobante deleted!');
    }
}
