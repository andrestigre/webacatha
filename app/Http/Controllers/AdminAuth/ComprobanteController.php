<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Comprobante;
use Illuminate\Http\Request;
use App\Itemnav;
use Illuminate\Support\Facades\Input;
use Image;

class ComprobanteController extends Controller
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
            $comprobante = Comprobante::where('item_nav', 'LIKE', "%$keyword%")
                ->orWhere('detalle', 'LIKE', "%$keyword%")
                ->orWhere('contenido', 'LIKE', "%$keyword%")
                ->orWhere('imagen', 'LIKE', "%$keyword%")
                ->orWhere('section_color', 'LIKE', "%$keyword%")
                ->orWhere('activo', 'LIKE', "%$keyword%")
                ->orWhere('enlace', 'LIKE', "%$keyword%")
                ->orWhere('titulofinal', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $comprobante = Comprobante::latest()->paginate($perPage);
        }

        return view('admin.comprobante.index', compact('comprobante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $itemsnav = Itemnav::where('activo','1')->pluck('item_nav', 'id');
        return view('admin.comprobante.create', compact('itemsnav'));
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
			'detalle' => 'required'
		]);
        $requestData = $request->all();
        
        if ($request->hasFile('imagen')) {
            $file = Input::file('imagen');
            $uploadPath = public_path('uploads/sections/');
            $extension = $file->getClientOriginalName();
            $image  = Image::make($file->getRealPath());
            //$image->resize(1200, 900);
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->save($uploadPath.$fileName);
            $requestData['imagen'] = 'uploads/sections/'.$fileName;
        }

        try {
            Comprobante::create($requestData);
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/comprobante');
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
        $comprobante = Comprobante::findOrFail($id);

        return view('admin.comprobante.show', compact('comprobante'));
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
        $comprobante = Comprobante::findOrFail($id);
        $itemsnav = Itemnav::where('activo','1')->pluck('item_nav', 'id');

        return view('admin.comprobante.edit', compact('comprobante','itemsnav'));
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
			'detalle' => 'required'
		]);
        $requestData = $request->all();
        

        if ($request->hasFile('imagen')) {
            $file = Input::file('imagen');
            $uploadPath = public_path('uploads/sections/');
            $extension = $file->getClientOriginalName();
            $image  = Image::make($file->getRealPath());
            //$image->resize(1200, 900);
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->save($uploadPath.$fileName);
            $requestData['imagen'] = 'uploads/sections/'.$fileName;

            $item_delete = Comprobante::findOrFail($id);   
            $move = $item_delete['imagen'];
            $old = public_path('/').$move;
            $old          = str_replace("\\", "//", $old);
            if(!empty($move)){
                if(\File::exists($old)){
                    unlink($old);
                }
            }

        }

        

        try {
            $comprobante = Comprobante::findOrFail($id);
            $comprobante->update($requestData);
            flash('Guardado con exito')->success();
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        

        return redirect('admin/comprobante');
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
        Comprobante::destroy($id);

        return redirect('admin/comprobante')->with('flash_message', 'Comprobante deleted!');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    
}
