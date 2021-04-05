<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Labmail;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Miras Nurlybai';
        $objDemo->receiver = 'Miras Nurlybai';

        Mail::to("190103094@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
    }  
}
