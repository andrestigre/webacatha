<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class SliderController extends Controller
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
            $slider = Slider::where('titulo', 'LIKE', "%$keyword%")
                ->orWhere('itemuno', 'LIKE', "%$keyword%")
                ->orWhere('itemdos', 'LIKE', "%$keyword%")
                ->orWhere('itemtres', 'LIKE', "%$keyword%")
                ->orWhere('itemcuatro', 'LIKE', "%$keyword%")
                ->orWhere('detalle', 'LIKE', "%$keyword%")
                ->orWhere('imagen', 'LIKE', "%$keyword%")
                ->orWhere('detalle', 'LIKE', "%$keyword%")
                ->orWhere('video_background', 'LIKE', "%$keyword%")
                ->orWhere('enlace_video', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $slider = Slider::latest()->paginate($perPage);
        }

        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.slider.create');
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
			'titulo' => 'required|max:25',
			'itemuno' => 'nullable|max:25',
			'itemdos' => 'nullable|max:25',
			'itemtres' => 'nullable|max:25',
			'itemcuatro' => 'nullable|max:25',
			'detalle' => 'nullable|max:70'
		]);
        $requestData = $request->all();

        if ($request->hasFile('imagen')) {
            $file = Input::file('imagen');
            $uploadPath = public_path('uploads/slider/');
            //$extension = $file->getClientOriginalExtension();
            $extension = $file->getClientOriginalName();
            $image  = Image::make($file->getRealPath());
            //$image->resize(1200, 900);
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->save($uploadPath.$fileName);
            //$file->move($uploadPath, $fileName);
            $requestData['imagen'] = 'uploads/slider/'.$fileName;

        }

        try {
            
            Slider::create($requestData);
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }
        

        return redirect('admin/slider');
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
        $slider = Slider::findOrFail($id);

        return view('admin.slider.show', compact('slider'));
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
        $slider = Slider::findOrFail($id);

        return view('admin.slider.edit', compact('slider'));
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
            'titulo' => 'required|max:25',
            'itemuno' => 'nullable|max:25',
            'itemdos' => 'nullable|max:25',
            'itemtres' => 'nullable|max:25',
            'itemcuatro' => 'nullable|max:25',
            'detalle' => 'nullable|max:70'
        ]);

        $requestData = $request->all();

        if ($request->hasFile('imagen')) {
            $file = Input::file('imagen');
            $uploadPath = public_path('uploads/slider/');
            //$extension = $file->getClientOriginalExtension();
            $extension = $file->getClientOriginalName();
            $image  = Image::make($file->getRealPath());
            //$image->resize(1200, 900);
            $fileName = rand(11111, 99999) . '.' . $extension;
            $image->save($uploadPath.$fileName);
            //$file->move($uploadPath, $fileName);
            $requestData['imagen'] = 'uploads/slider/'.$fileName;

        }

        try {
            
            $slider = Slider::findOrFail($id);
            $slider->update($requestData);
            flash('Guardado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }
        
        

        return redirect('admin/slider');
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
            
            Slider::destroy($id);
            flash('Realizado con exito')->success();
            
        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
        }

        

        return redirect('admin/slider');
    }
}
