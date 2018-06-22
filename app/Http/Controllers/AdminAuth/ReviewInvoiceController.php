<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Invoice;
use Illuminate\Http\Request;

class ReviewInvoiceController extends Controller
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
            $reviewinvoice = Invoice::where('title', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('pack', 'LIKE', "%$keyword%")
                ->orWhere('payment_status', 'LIKE', "%$keyword%")
                ->orWhere('detall', 'LIKE', "%$keyword%")
                ->orWhere('tipopaquete_id', 'LIKE', "%$keyword%")
                ->orWhere('tipo_paquete', 'LIKE', "%$keyword%")
                ->orWhere('cli_nombre', 'LIKE', "%$keyword%")
                ->orWhere('cli_email', 'LIKE', "%$keyword%")
                ->orWhere('cli_contacto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reviewinvoice = Invoice::latest()->paginate($perPage);
        }

        return view('admin.review-invoice.index', compact('reviewinvoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.review-invoice.create');
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
			'title' => 'required|max:25',
			'price' => 'required'
		]);
        $requestData = $request->all();
        
        Invoice::create($requestData);

        return redirect('admin/review-invoice')->with('flash_message', 'ReviewInvoice added!');
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
        $reviewinvoice = Invoice::findOrFail($id);

        return view('admin.review-invoice.show', compact('reviewinvoice'));
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
        $reviewinvoice = Invoice::findOrFail($id);

        return view('admin.review-invoice.edit', compact('reviewinvoice'));
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
			'title' => 'required|max:25',
			'price' => 'required'
		]);
        $requestData = $request->all();
        
        $reviewinvoice = Invoice::findOrFail($id);
        $reviewinvoice->update($requestData);

        return redirect('admin/review-invoice')->with('flash_message', 'ReviewInvoice updated!');
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
        Invoice::destroy($id);

        return redirect('admin/review-invoice')->with('flash_message', 'ReviewInvoice deleted!');
    }
}
