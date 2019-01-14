<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
use Mail;

class MailSetting extends Controller
{
     

     public function getContact(){

     	return view('welcome_watch');
     }





    //JBL GO 2
     public function postContact(Request $request){

      Mail::send('emails.contact',
       array(
           'fam' => $request->get('fam'),
           'phone' => $request->get('phone'),
           'address' => $request->get('address'),
       ), function($message)
   {
       $message->from('aziztwelve@gmail.com');
       $message->to('sport_aziz@mail.ru', 'Азиз')->subject('colonki.ru | jbl go 2');
   });

      return redirect('/back')->with('success', 'Спасибо за Заказ! Ждите звонка!');
     }




     //JBL CHARGE 2+
     public function postCharge2(Request $request){

      Mail::send('emails.contact',
       array(
           'fam' => $request->get('fam'),
           'phone' => $request->get('phone'),
           'address' => $request->get('address'),
       ), function($message)
   {
       $message->from('aziztwelve@gmail.com');
       $message->to('sport_aziz@mail.ru', 'Азиз')->subject('colonki.ru | charge 2+');
   });

      return redirect('/backcharge2')->with('success', 'Спасибо за Заказ! Ждите звонка!');
     }




     //JBL CHARGE 3
     public function postCharge3(Request $request){

      Mail::send('emails.contact',
       array(
           'fam' => $request->get('fam'),
           'phone' => $request->get('phone'),
           'address' => $request->get('address'),
       ), function($message)
   {
       $message->from('aziztwelve@gmail.com');
       $message->to('sport_aziz@mail.ru', 'Азиз')->subject('colonki.ru | charge 3');
   });

      return redirect('/backcharge3')->with('success', 'Спасибо за Заказ! Ждите звонка!');
     }


     //JBL PULSE 3
     public function postPulse3(Request $request){

      Mail::send('emails.contact',
       array(
           'fam' => $request->get('fam'),
           'phone' => $request->get('phone'),
           'address' => $request->get('address'),
       ), function($message)
   {
       $message->from('aziztwelve@gmail.com');
       $message->to('sport_aziz@mail.ru', 'Азиз')->subject('colonki.ru | pulse 3');
   });

      return redirect('/backpulse3')->with('success', 'Спасибо за Заказ! Ждите звонка!');
     }




     //JBL XTREME
     public function postXtreme(Request $request){

     	Mail::send('emails.contact',
       array(
           'fam' => $request->get('fam'),
           'phone' => $request->get('phone'),
           'address' => $request->get('address'),
       ), function($message)
   {
       $message->from('aziztwelve@gmail.com');
       $message->to('sport_aziz@mail.ru', 'Азиз')->subject('colonki.ru | xtreme ');
   });

     	return redirect('/backxtreme')->with('success', 'Спасибо за Заказ! Ждите звонка!');
     }
}
