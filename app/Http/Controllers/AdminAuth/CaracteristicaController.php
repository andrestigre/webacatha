<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Caracteristica;
use App\Itemcaracteristica;
use App\Itemnav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class CaracteristicaController extends Controller
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
            $caracteristica = Caracteristica::where('item_nav', 'LIKE', "%$keyword%")
                ->orWhere('contenido', 'LIKE', "%$keyword%")
                ->orWhere('section_color', 'LIKE', "%$keyword%")
                ->orWhere('activo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $caracteristica = Caracteristica::latest()->paginate($perPage);
        }

        return view('admin.caracteristica.index', compact('caracteristica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $itemsnav = Itemnav::where('activo','1')->pluck('item_nav', 'id');
        return view('admin.caracteristica.create', compact('itemsnav'));
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
			'contenido' => 'required'
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
            
            Caracteristica::create($requestData);
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
            
        }
        

        return redirect('admin/caracteristica');
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
        $caracteristica = Caracteristica::findOrFail($id);

        return view('admin.caracteristica.show', compact('caracteristica'));
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
        $perPage = 25;
        $itemsnav = Itemnav::where('activo','1')->pluck('item_nav', 'id');
        $caracteristica = Caracteristica::findOrFail($id);
        //$itemcaracteristica = Itemcaracteristica::where('caracteristica_id', $id)->latest()->paginate($perPage);

        return view('admin.caracteristica.edit', compact('caracteristica','itemsnav'));
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
			'contenido' => 'required'
		]);
        $requestData = $request->all();

        if ($request->hasFile('imagen')) {
            $file = Input::file('imagen');
            $uploadPath = public_path('uploads/sections/');
            //$extension = $file->getClientOriginalExtension();
            $extension = $file->getClientOriginalName();
            $image  = Image::make($file->getRealPath());
            //$image->resize(1200, 900);
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->save($uploadPath.$fileName);
            //$file->move($uploadPath, $fileName);
            $requestData['imagen'] = 'uploads/sections/'.$fileName;
        }

        try {

            $caracteristica = Caracteristica::findOrFail($id);
        $caracteristica->update($requestData);
            flash('Realizado con exito')->success();
            
        } catch (Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
            
        }
        
        

        return redirect('admin/caracteristica');
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
            
        Caracteristica::destroy($id);
            flash('Realizado con exito')->success();

        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/caracteristica');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }


}
