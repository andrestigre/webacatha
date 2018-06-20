<?php

use Illuminate\Database\Seeder;
use App\Contacto;

class ContactoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contacto::create( [
'id'=>1,
'titulo'=>'Estamos prestos para servirte en donde te encuentres solo comunícate con nosotros.',
'contenido'=>'<div class="col-lg-2 col-lg-offset-3">
                    <address>
                        <strong><span class="navy">Acatha Inc.</span></strong><br/>
                        4th Floor Torres del Mall del Sol <br/>Avenida Joaquin Orratia y<br/>
                        Juan Tanca Marengo
                        Guayaquil, Ecuador<br/>
                        <abbr title="Phone">CEL:</abbr> +593 98 976 5272</br>
                    </address>
                </div>
                <div class="col-lg-2">
                    <address>
                        <strong><span class="navy">AustroSoft, Cia Ltda.</span></strong><br/>
                        Av Francisco Moscoso, No 6-25 y <br/>Av 10 de Agosto<br/>
                        Cuenca, Ecuador 11204<br/>
                        <abbr title="Phone">CEL:</abbr> +593 98 976 5272</br>
                        <abbr title="Phone">T:</abbr> +593 7 281-8447
                    </address>
                </div>
                <div class="col-lg-2">
                    <p class="text-color">
                        <strong>ACATHA</strong> es un universo de aplicativos para la gesti&oacute;n administrativa, financiera y contable que te permitir&aacute; realizar tareas complejas de forma sencilla, integral y precisa.
                    </p>
                </div>',
'enlaceboton'=>'mailto:comercializacion@austrosoft.com.ec',
'textoboton'=>'Escríbenos',
'social_fb'=>'https://www.facebook.com/acathaec',
'social_tw'=>'https://twitter.com/acathaec',
'section_color'=>'gray-section',
'estado'=>1,
'itemnav_id'=>6
] );
    }
}
