<?php

namespace Faden\FadenMessageModule\Http\Controllers;

use Alive2212\LaravelSmartRestful\SmartCrudController;
use Faden\FadenMessageModule\FadenMessage;

use App\Http\Controllers\Controller;
use Faden\FadenMessageModule\FadenMessageType;
use Faden\FadenMessageModule\Notifications\MailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;


class FadenMessageController extends Controller
{

    // Test sending eMail with request
    public function send(Request $request)
    {
        $message = FadenMessage::create($request->request->all());
        Notification::route('mail', $message->to)->notify( new MailNotification($message));
    }

    // Test sending eMail with default data
    public function test()
    {
        $type = new FadenMessageType;
        $type->key = 'email';
        $type->sends_in = 20;
        $type->save();

        $message = new FadenMessage;
        $message->to = 'ali.salimiansas2@gmail.com';
        $message->body = 'hello world';
        $message->title = 'title';

        $type->message()->save($message);

    }

    // Test sending PushMessage with request
    public function push(Request $request)
    {
        $message=$request;

        Http::withHeaders([
            'Authorization' => 'key=AAAApw-yf2U:APA91bE_baOttqXzE7q39jozuBIwSBChFNwKtx0U7TuloyAQJiuvJO1K7gmBPpK8qjKp12mBufpK8I2ndQug8Emzq-BJUcHYSNCKK3To4Uy0D2B6IMbOnJizhDGEw5tnS6yb4sNLDOjP',
            'Content-Type' => 'application/json'
        ])->post('https://fcm.googleapis.com/fcm/send', [
            "to" => $message->to,
            "notification" => [
                'body' => $message->push_body,
                'title' => $message->push_title
            ]
        ]);
    }

}
