<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Mail;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function storeMessage(Request $request)
    {
      if($request->validate([
        'message' => 'required'
      ]))
      {
        DB::table('news')->updateOrInsert(
        ['id' => 1],
        ['message' => $request->message],
        );
        return redirect()->back();
      }
      else {
        die('fehler bitte nochmal versuchen');
      }


    }
    public function CustomerNotification(Request $request)
    {
      // dd($request);
      $request->validate([
        'message' => 'required',
        'email' => 'required | email',
        'name' => 'required',

      ]);

      $data = array(
        'name'=> $request->name,
        'dmessage' => $request->message,
        'email' => $request->email,
      );

      $adress = $request->email;
      $customer = 1;
      $subject = $request->subject;

        Mail::send('mails.notification', $data, function($message) use($data,$subject){
           $message->to('info@teamyak-bjj.de', 'Sie haben eine Anfrage erhalten')
           ->subject($subject);
           $message->from('info@teamyak-bjj.de','Kontaktformular');
        });

        $data['customer'] = $customer;

        Mail::send('mails.notification', $data, function($message) use($data, $adress){

           $message->to($adress, 'Wir haben Ihre Nachricht erhalten')
           ->subject('Wir haben Ihre Nachricht erhalten');
           $message->from('info@teamyak-bjj.de','Kundendienst');
        });

        return redirect()->back();
    }
}
