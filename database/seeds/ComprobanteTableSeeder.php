<?php

use Illuminate\Database\Seeder;
use App\Comprobante;

class ComprobanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comprobante::create( [
'id'=>1,
'detalle'=>'<h1>Facturaci&oacute;n Electr&oacute;nica</h1><p>Realiza la emisi&oacute;n de comprobantes electr&oacute;nicos de forma eficiente.</p>',
'contenido'=>'<p><small>ACATHA</small></p><h2>Integrado, Simple, Actualizado, Seguro, Disponible</h2><p>Factura de manera f&aacute;cil, eficiente y segura donde te encuentres puedes adquirir la app para tus dispositivos m&oacute;viles o integrarlo a Acatha para la gesti&oacute;n de tu negocio.&nbsp;<br />
<br />Al alcance de todos, construido bajo las normas y requerimientos seg&uacute;n las fichas t&eacute;cnicas liberadas por el SRi en sus modalidades on-line y off-line.</p>',
'imagen'=>'uploads/sections/40914.factelectronica3.png',
'section_color'=>'gray-section',
'activo'=>1,
'enlace'=>'www.google.com',
'titulofinal'=>'Que son los comprobantes electrónicos?',
'itemnav_id'=>3,
'created_at'=>'2018-06-16 00:47:44',
'updated_at'=>'2018-06-16 01:25:42'
] );
    }
}
