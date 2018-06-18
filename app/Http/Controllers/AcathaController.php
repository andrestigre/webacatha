<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Itemnav;
use App\Slider;
use App\Caracteristica;
use App\Itemcaracteristica;
use App\Comprobante;
use App\Itemcomprobante;
use App\Soporte;
use App\Itemsoporte;

class AcathaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa  = Empresa::first();
        $itemnavs = Itemnav::where('activo','1')->get();
        $sliders = Slider::where('estado','1')->get();
        $caracteristicas = Caracteristica::where('activo','1')->first();
        $itemscaracteristicas = Itemcaracteristica::where('caracteristica_id', $caracteristicas->id)->where('estado','1')->get();
        $caracteristicassub = Caracteristica::where('id','!=','1')->where('activo','1')->first();
        $itemscaracteristicasleft = Itemcaracteristica::where('caracteristica_id', $caracteristicassub->id)->where('estado','1')->where('alinear','1')->get();
        $itemscaracteristicasrigth = Itemcaracteristica::where('caracteristica_id', $caracteristicassub->id)->where('estado','1')->where('alinear','0')->get();


        $comprobante = Comprobante::where('activo','1')->first();
        $itemscomprobante = Itemcomprobante::where('comprobante_id', $comprobante->id)->where('estado','1')->get();

        $soporte = Soporte::where('activo','1')->first();
        $itemsoportes = Itemsoporte::where('soporte_id', $soporte->id)->where('estado','1')->get();
        return view('acatha',compact('empresa','itemnavs','sliders','caracteristicas','itemscaracteristicas','caracteristicassub','itemscaracteristicasleft','itemscaracteristicasrigth','comprobante','itemscomprobante','soporte','itemsoportes'));
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
