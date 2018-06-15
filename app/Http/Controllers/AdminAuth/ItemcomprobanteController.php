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
