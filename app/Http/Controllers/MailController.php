<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\LabEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $obj = new \stdClass();
        $obj->demo_one = 'Demo One Value';
        $obj->demo_two = 'Demo Two Value';
        $obj->sender = 'temirgaliomar@gmail.com';
        $obj->receiver = 'temirgaliomar@gmail.com';

        Mail::to('temirgaliomar@gmail.com')->send(new LabEmail($obj));
    }
}
