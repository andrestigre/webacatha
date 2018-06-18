<?php

use Illuminate\Database\Seeder;
use App\Itemcomprobante;

class ItemComprobanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Itemcomprobante::create( [
            'id'=>1,
            'item_comprobante'=>'Integrado',
            'contenido'=>'Registra facturas, comprobantes de retención, notas de crédito, notas de débito, y guias de remisión',
            'efecto'=>'fadeInLeft',
            'estado'=>1,
            'textalinear'=>1,
            'comprobante_id'=>1
        ] );

        Itemcomprobante::create( [
            'id'=>2,
            'item_comprobante'=>'A tiempo',
            'contenido'=>'Entrega inmediata mediante envío a uno o varios correos electrónicos ajuntando PDF y XML',
            'efecto'=>'fadeInLeft',
            'estado'=>1,
            'textalinear'=>1,
            'comprobante_id'=>1
        ] );

        Itemcomprobante::create( [
            'id'=>3,
            'item_comprobante'=>'Comprobantes Electrónicos',
            'contenido'=>'Un comprobante electrónico es un documento que cumple con los requisitos legales y reglamentarios exigibles para todos comprobantes de venta, garantizando la autenticidad de su origen y la integridad de su contenido.',
            'efecto'=>'zoomIn',
            'estado'=>1,
            'textalinear'=>2,
            'comprobante_id'=>1
        ] );

        Itemcomprobante::create( [
            'id'=>4,
            'item_comprobante'=>'Actualizado',
            'contenido'=>'Generamos todos los comprobantes segun los nuevos esquemas del SRi',
            'efecto'=>'fadeInRight',
            'estado'=>1,
            'textalinear'=>0,
            'comprobante_id'=>1
        ] );

        Itemcomprobante::create( [
            'id'=>5,
            'item_comprobante'=>'Disponible',
            'contenido'=>'Con un nivel del 99.6% en linea podrás realizar sus comprobantes de forma segura.',
            'efecto'=>'fadeInRight',
            'estado'=>1,
            'textalinear'=>0,
            'comprobante_id'=>1
        ] );


    }
}
