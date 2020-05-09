<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use DB;

class PayPalController extends Controller
{
	public function index()
	{
		echo 'rajvi';
		exit;
	}

    public function payment1(Request $request)
    {
    	$data = [];
        $data['items'] = [
            [
                'name' => 'ItSolutionStuff.com',
                'price' => $_POST['amount'],
                'desc'  => 'Description for ItSolutionStuff.com',
                'qty' => 1
            ]
        ];

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
         $data['total'] = $_POST['amount'];
  		
        $provider = new ExpressCheckout;
  		
        $response = $provider->setExpressCheckout($data);
  		
        $response = $provider->setExpressCheckout($data, true);
  		
        return redirect($response['paypal_link']);
    }
   
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
    	$provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);
       
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

        	$token = $response['TOKEN'];
        	$timestamp = $response['TIMESTAMP'];
        	$ack = $response['ACK'];
        	$email = $response['EMAIL'];
        	$business = $response['BUSINESS'];
        	$firstname = $response['FIRSTNAME'];
        	$lastname = $response['LASTNAME'];
        	$currancycode = $response['COUNTRYCODE'];
        	$amount = $response['AMT'];
        	$invoice = $response['INVNUM'];

            $id = DB::table('paypal_payment')->insertGetId(
                        ['token' => $token,'timestamp' => $timestamp,'ack' => $ack,'email' => $email,'business' => $business,'firstname' => $firstname,'lastname' => $lastname,'currancycode' => $currancycode, 'amount' => $amount, 'invoice' => $invoice]);

            return redirect('/pay')->with('success', 'Payment successfully!');;
        }
  		else{
  			dd('Something is wrong.');
  		}
        
    }
}
