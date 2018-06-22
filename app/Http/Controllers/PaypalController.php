<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Illuminate\Support\Facades\Input;

use App\Invoice;
use App\Paquete;
use DB;


class PaypalController extends Controller
{

    private $_api_context;
    public function __construct()
    {
        if (!\Session::has('cart')) {
             \Session::put('cart', array());
        }
        // setup PayPal api context
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);

        

    }

    public function postPayment()
    {

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $items = array();
        $subtotal = 0;
        $cart = \Session::get('cart');
        $currency = 'USD';


        foreach($cart as $producto){
            $item = new Item();
            $item->setName($producto->title)
            ->setCurrency($currency)
            ->setDescription($producto->detalle)
            ->setQuantity(1)
            ->setPrice($producto->precio);
            $items[] = $item;
            $subtotal += 1 * $producto->precio;
        }
        
        $item_list = new ItemList();
        $item_list->setItems($items);

        //costo de envio
        $details = new Details();
        $details->setSubtotal($subtotal)
        ->setShipping(0);
        
        $total = $subtotal + 0;
        
        $amount = new Amount();
        $amount->setCurrency($currency)
            ->setTotal($total)
            ->setDetails($details);



        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Pedido de prueba en mi Laravel App Store');


        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
            ->setCancelUrl(\URL::route('payment.status'));

            
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

           
            
            //conec a paypal
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Ups! Algo salió mal');
            }
        }


        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        // add payment ID to session
        \Session::put('paypal_payment_id', $payment->getId());
        if(isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }
        return \Redirect::route('mostrarerror')
            ->with('error', 'Ups! Error desconocido.');
    }


    public function getPaymentStatus(Request $request)
    {
        // Get the payment ID before session clear
        $payment_id = \Session::get('paypal_payment_id');
        // clear the session payment ID
        \Session::forget('paypal_payment_id');
        $payerId = $request->PayerID;
        $token = $request->token;
        $payment_id = $request->paymentId;
        
        //if (empty(\Input::get('PayerID')) || empty(\Input::get('token'))) {
        if (empty($payerId) || empty($token)) {
            return \Redirect::route('mostrarerror')
                ->with('message', 'Hubo un problema al intentar pagar con Paypal');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        // PaymentExecution object includes information necessary 
        // to execute a PayPal account payment. 
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId($request->PayerID);
        //Execute the payment
        $result = $payment->execute($execution, $this->_api_context);
        //echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later
        if ($result->getState() == 'approved') { // payment made
            // Registrar el pedido --- ok
            $this->guardaOrden();
        

              \Session::forget('cart');

            // Registrar el Detalle del pedido  --- ok
            // Eliminar carrito 
            // Enviar correo a user
            // Enviar correo a admin
            // Redireccionar
            //Guardar transaccion $this->crearOrden();
            flash('Compra realizada de forma correcta.')->info();
            return \Redirect::route('order_success');
                //return "finalizado";
        }
        flash('La compra fue cancelada')->info();
        return \Redirect::route('order_not');
    }

    public function guardaOrden(){
        $cart = \Session::get('cart');
        foreach ($cart as $producto) {
            $this->saveDetall($producto);
        }
        //      \Session::forget('cart');

    }

    

    public function saveDetall($producto){
        Invoice::create([
            'title' => $producto->title,
            'price' => $producto->precio,
            'payment_status' => 'completado',
            'detall' => $producto->detalle,
            'periodo' => $producto->periodo,
            'tipopaquete_id' => $producto->Tipopaquete->id,
            'cli_nombre' => $producto->cli_nombre,
            'cli_email' => $producto->cli_email,
            'cli_contacto' => $producto->cli_contacto
        ]);
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
