<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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
}
