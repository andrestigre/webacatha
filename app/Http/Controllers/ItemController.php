<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paquete;
use App\Invoice;
use DB;
use Session;

class ItemController extends Controller
{

    public function __construct()
    {

        if (!Session::has('cart')) {
           Session::put('cart', array());
       }

   }


   public function add(Request $request, Paquete $paquete, $datoscliente){
        //Session::flush();
    $toarray = explode("&", $datoscliente);
    $paquete = Paquete::where('id',$paquete->id)->first();
    $paquete['cantidad'] = 1;
    $paquete['payment_status'] = 'pendiente';
    $paquete['title'] = $paquete->Tipopaquete->tipo_paquete;
    $paquete['cli_nombre'] = $toarray[0];
    $paquete['cli_email'] = $toarray[1];
    $paquete['cli_contacto'] = $toarray[2];
    $cart[$paquete->id] = $paquete;
    session()->put('cart', $cart);

    return \Redirect::route('payment');
}

public function vercarro(){
    $cart = \Session::get('cart');
    foreach ($cart as $car) {
        dd($car->detalle);
    }

}

public function addPackCustom($datoscliente){
    $toarray = explode("&", $datoscliente);
    try {
        $paquete = Paquete::where('id',$toarray[4])->first();
        $paquete['cantidad'] = 1;
        $paquete['payment_status'] = 'en espera';
        $paquete['title'] = $paquete->Tipopaquete->tipo_paquete;
        $paquete['cli_nombre'] = $toarray[0];
        $paquete['cli_email'] = $toarray[1];
        $paquete['cli_contacto'] = $toarray[2];
        $paquete['detall'] = $toarray[3];
        Invoice::create([
            'title' => $paquete->title,
            'price' => '0',
            'payment_status' => 'en espera',
            'pack' => $paquete->title,
            'detall' => $paquete->detall,
            'periodo' => $paquete->periodo,
            'tipo_paquete' => $paquete->title,
            'cli_nombre' => $paquete->cli_nombre,
            'cli_email' => $paquete->cli_email,
            'cli_contacto' => $paquete->cli_contacto
        ]);
        flash('Compra realizada de forma correcta')->info();
    } catch (\Exception $e) {
        flash('Error al registrar su petición')->info();
    }

    return \Redirect::route('order_success');

}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
