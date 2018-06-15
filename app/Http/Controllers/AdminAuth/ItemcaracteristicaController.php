<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Itemcaracteristica;
use Illuminate\Http\Request;

class ItemcaracteristicaController extends Controller
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
            $itemcaracteristica = Itemcaracteristica::where('item_caracteristica', 'LIKE', "%$keyword%")
                ->orWhere('detalle', 'LIKE', "%$keyword%")
                ->orWhere('iconuno', 'LIKE', "%$keyword%")
                ->orWhere('icondos', 'LIKE', "%$keyword%")
                ->orWhere('icontres', 'LIKE', "%$keyword%")
                ->orWhere('iconcuatro', 'LIKE', "%$keyword%")
                ->orWhere('iconcinco', 'LIKE', "%$keyword%")
                ->orWhere('iconseis', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('caracteristica_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $itemcaracteristica = Itemcaracteristica::latest()->paginate($perPage);
        }

        return view('admin.itemcaracteristica.index', compact('itemcaracteristica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.itemcaracteristica.create');
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
        
        Itemcaracteristica::create($requestData);

        return redirect('admin/itemcaracteristica')->with('flash_message', 'Itemcaracteristica added!');
    }

    public function storeajax(Request $request)
    {
        if($request->ajax()){
            $itemcaracteristica = Itemcaracteristica::create($request->all());
            return response()->json($itemcaracteristica);
        }    
    }

    public function get_toreajax(Request $request){
        if($request->ajax()){
            $perPage = 25;
            $itemcaracteristica = Itemcaracteristica::where('caracteristica_id', $request->id)->latest()->paginate($perPage);
            return view('admin.caracteristica.itemcaracteristica',compact('itemcaracteristica'));
        }
    }

    
    public function delete_itemcrt(Request $request){
        if($request->ajax()){
            $itemcaracteristica = Itemcaracteristica::where('id', $request->id)->delete();
            return response()->json($itemcaracteristica);
        }
    }

    public function select_itemcrt(Request $request){
        if($request->ajax()){
            $itemcaracteristica = Itemcaracteristica::where('id', $request->id)->first();
            return response()->json($itemcaracteristica);
        }
    }

    
    public function updateitemcrt(Request $request, $id){
        if($request->ajax()){
            $itemcaracteristica = Itemcaracteristica::find($id);
            $itemcaracteristica->item_caracteristica = $request->item_caracteristica;
            $itemcaracteristica->detalle = $request->detalle;
            $itemcaracteristica->iconuno = $request->iconuno;
            $itemcaracteristica->icondos = $request->icondos;
            $itemcaracteristica->icontres = $request->icontres;
            $itemcaracteristica->iconcuatro = $request->iconcuatro;
            $itemcaracteristica->iconcinco = $request->iconcinco;
            $itemcaracteristica->iconseis = $request->iconseis;
            $itemcaracteristica->caracteristica_id = $request->caracteristica_id;
            $itemcaracteristica->estado = $request->estado;

            $resultado = $itemcaracteristica->save();

                
            if($resultado){
                return response()->json(['success'=>'true','caracteristica_id'=>$request->caracteristica_id]);
            }else{
                return response()->json(['success'=>'false']);
            }
        }
    }

    public function listartodo(){
            $perPage = 25;
            $itemcaracteristica = Itemcaracteristica::latest()->paginate($perPage);
            return view('admin.caracteristica.itemcaracteristica',compact('itemcaracteristica'));
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
        $itemcaracteristica = Itemcaracteristica::findOrFail($id);

        return view('admin.itemcaracteristica.show', compact('itemcaracteristica'));
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
        $itemcaracteristica = Itemcaracteristica::findOrFail($id);

        return view('admin.itemcaracteristica.edit', compact('itemcaracteristica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateBORRARESTO(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $itemcaracteristica = Itemcaracteristica::findOrFail($id);
        $itemcaracteristica->update($requestData);

        return redirect('admin/itemcaracteristica')->with('flash_message', 'Itemcaracteristica updated!');
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
        Itemcaracteristica::destroy($id);

        return redirect('admin/itemcaracteristica')->with('flash_message', 'Itemcaracteristica deleted!');
    }
}
