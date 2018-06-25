<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Suscription;
use Illuminate\Http\Request;

class SuscriptionController extends Controller
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
            $suscription = Suscription::where('namesuscripcion', 'LIKE', "%$keyword%")
                ->orWhere('emailsuscripcion', 'LIKE', "%$keyword%")
                ->orWhere('telefonosuscripcion', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $suscription = Suscription::latest()->paginate($perPage);
        }

        return view('admin.suscription.index', compact('suscription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.suscription.create');
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
			'namesuscripcion' => 'required|max:75',
            'emailsuscripcion' => 'required|email|unique:suscriptions|max:45',
			'telefonosuscripcion' => 'required|max:45'
		]);
        $requestData = $request->all();
        
        Suscription::create($requestData);

        return redirect('admin/suscription')->with('flash_message', 'Suscription added!');
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
        $suscription = Suscription::findOrFail($id);

        return view('admin.suscription.show', compact('suscription'));
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
        $suscription = Suscription::findOrFail($id);

        return view('admin.suscription.edit', compact('suscription'));
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
			'namesuscripcion' => 'required|max:75',
            'emailsuscripcion' => 'required|max:45|email|unique:suscriptions,emailsuscripcion,'.$id,
			'telefonosuscripcion' => 'required|max:45'
		]);

        $requestData = $request->all();

        try {
            
        $suscription = Suscription::findOrFail($id);
        $suscription->update($requestData);
            flash('Guardado con exito')->success();

        } catch (\Exception $e) {
            flash('No se pudo realizar la peticion')->warning();
            
        }
        

        return redirect('admin/suscription');
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
        Suscription::destroy($id);

        return redirect('admin/suscription')->with('flash_message', 'Suscription deleted!');
    }
}
