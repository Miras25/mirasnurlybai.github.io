<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Labmail;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function send()
    {
        $data = array('name'=>"Miras Nurlybay", "body" => "Test mail");
     
        Mail::send('mail.demo', $data, function($message){
            $message->to('nurlybaym@gmail.com', 'Miras Nurlybay')
                    ->subject('Artisans Web Testing Mail');
            $message->from('190103094@stu.sdu.edu.kz','Miras Nurlybay');
        });
    }  
}
