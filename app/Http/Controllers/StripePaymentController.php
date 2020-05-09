<?php

namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Session;
use Stripe;
use Mail;
use DB;

class StripePaymentController extends Controller
{
     /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
       // return view('stripe');
        return view('frontend.templates.stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function stripePost(Request $request)
    {
        
        $data = array(
            'amount' => $_POST['amount'],
            'username' => $_POST['username'],
            'boat' => $_POST['boatname'],
            'reservation' => $_POST['reservation']
        );
        

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $res = Stripe\Charge::create ([
                "amount" => $_POST['amount']*100,
                "currency" => "usd",
                "source" => $request->stripeToken

        ]);
        if($res['status'] == "succeeded"){
            $amount = $_POST['amount']*100;
            $timestamp = date("h:i:sa");
            $id = DB::table('stripe_payment')->insertGetId(
                            ['token' => $request->stripeToken,'timestamp' => $timestamp,'amount' =>$amount ,'email' => $_POST['email'],'username' => $_POST['username'],'reservation' => $_POST['reservation']]);

            Mail::send('emails.stripe',["data1"=>$data] , function($message) use ($data){
                    $message->to('captain@hamptonsboatrental.com', '')->subject
                            ('PAYMENT YACHT HAMPTON');
                    $message->from('captain@hamptonsboatrental.com','yachthampton');
                    });

             Mail::send('emails.stripe',["data2"=>$data] , function($message) use ($data){
                    $message->to($_POST['email'], '')->subject
                            ('SUCCESSFUL PAYMENT');
                    $message->from('captain@hamptonsboatrental.com','yachthampton');
                    });

            Session::flash('success', 'Payment successful!'); 
        }else{
            Session::flash('error', 'Somethig went wrong!'); 
        }
        
          
        return redirect('/pay');
    }
}
