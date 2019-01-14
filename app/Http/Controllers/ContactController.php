<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller{



	public function contactUSPost(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'phone' => 'required|number',
        ]);
 
       // ContactUS::create([
       //  'name'=>$request->get('name'),
       //  'phone'=>$request->get('phone'),
       // ]);







       Mail::send('email.contact',
       array(
           'name' => $request->get('name'),
           'phone' => $request->get('phone'),
           'size' => $request->get('size'),
       ), function($message)
   {
       $message->from('saquib.gt@gmail.com');
       $message->to('sport_aziz@mail.ru', 'Admin')->subject('Cloudways Feedback');
   });



 
       return redirect('/')->with('success', 'Спасибо за заказ, Вам наш сотрудник позвонит!');
   }
    
}
