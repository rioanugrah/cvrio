<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactPersonController extends Controller
{
    public function send_mail(Request $request)
    {
        $datas = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        $send_mail = Mail::to('rioanugrah@rioanugrah.my.id')
        ->send(new \App\Mail\ContactPerson($datas));

        return response()->json([
            'success' => true,
            'message_title' => 'Berhasil',
            'message_content' => 'Terimakasih telah menghubungi kami'
        ]);
    }
}
