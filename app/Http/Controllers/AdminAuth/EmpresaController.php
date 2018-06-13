<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class EmpresaController extends Controller
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
            $empresa = Empresa::where('empresa', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('logo', 'LIKE', "%$keyword%")
                ->orWhere('representante', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $empresa = Empresa::latest()->paginate($perPage);
        }

        return view('admin.empresa.index', compact('empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.empresa.create');
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
			'empresa' => 'required|max:191',
			'telefono' => 'required|max:17',
			'email' => 'required|max:45',
			'representante' => 'nullable|max:191'
		]);
        $requestData = $request->all();
        

        if ($request->hasFile('logo')) {
            $file = Input::file('logo');
            $uploadPath = public_path('uploads/empress/');
            //$extension = $file->getClientOriginalExtension();
            $extension = $file->getClientOriginalName();
            $image  = Image::make($file->getRealPath());
            //$image->resize(1200, 900);
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->save($uploadPath.$fileName);
            //$file->move($uploadPath, $fileName);
            $requestData['logo'] = 'uploads/empress/'.$fileName;


        }

        try {

        Empresa::create($requestData);
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo guardar la peticion')->warning();
        }

        return redirect('admin/empresa');

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
        $empresa = Empresa::findOrFail($id);

        return view('admin.empresa.show', compact('empresa'));
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
        $empresa = Empresa::findOrFail($id);

        return view('admin.empresa.edit', compact('empresa'));
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
			'empresa' => 'required|max:191',
			'telefono' => 'required|max:17',
			'email' => 'required|max:45|unique:empresas,email,'.$id,
			'representante' => 'nullable|max:191'
		]);

        $requestData = $request->all();
        

        if ($request->hasFile('logo')) {
            $file = Input::file('logo');
            $uploadPath = public_path('uploads/empress/');
            //$extension = $file->getClientOriginalExtension();
            $extension = $file->getClientOriginalName();
            $image  = Image::make($file->getRealPath());
            //$image->resize(1200, 900);
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->save($uploadPath.$fileName);
            //$file->move($uploadPath, $fileName);
            $requestData['logo'] = 'uploads/empress/'.$fileName;

            $item_delete = Empresa::findOrFail($id);   
            $move = $item_delete['logo'];
            $old = public_path('/').$move;
            if(!empty($move)){
                if(\File::exists($old)){
                    unlink($old);
                }
            }


        }

        try {

            $empresa = Empresa::findOrFail($id);
            $empresa->update($requestData);
            flash('Actualizado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        

        return redirect('admin/empresa');
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
            
            Empresa::destroy($id);
            flash('Realizado con exito')->success();

        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        return redirect('admin/empresa');
    }

     protected function guard()
    {
        return Auth::guard('admin');
    }

    
}
