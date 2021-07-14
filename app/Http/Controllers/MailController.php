<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function basic_email() {
        $data = array('name'=>"Virat Gandhi");

        Mail::send(['text'=>'login'], $data, function($message) {
           $message->to('sivakajan09@gmail.com', 'Tutorials Point')->subject
              ('Laravel Basic Testing Mail');
           $message->from('sivakajan09@gmail.com','Orders');
        });
        echo "Basic Email Sent. Check your inbox.";
     }

     public function html_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('order', $data, function($message) {
           $message->to('sivakajan09@gmail.com', 'Tutorials Point')->subject
              ('Laravel HTML Testing Mail');
           $message->from('sivakajan09@gmail.com','order');
        });
        echo "HTML Email Sent. Check your inbox.";
     }
     public function attachment_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
           $message->to('abc@gmail.com', 'Tutorials Point')->subject
              ('Laravel Testing Mail with Attachment');
           $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
           $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
           $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
     }


     public function emails($email) {

        $details = [
            'title' => 'Title: Mail from Real Programmer',
            'body' => 'Body: This is for testing email using smtp'
        ];

        \Mail::to($email)->send(new MyTestMail($details));
        return "ok send";
     }
}
