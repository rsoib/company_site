<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Lang;
use Route;

class ContactController extends SiteController
{
    
    public function __construct()
    {
    	$this->template = 'contacts.contact_view';
    }

	public function index()
	{
		$this->title = 'Контакты';

		$this->content = view('contacts.contact_content')->render();

		$this->vars = array_add($this->vars,'content',$this->content);

		return $this->renderOutput();
	}


	public function store(Request $request)
	{
		
		if ($request->isMethod('post')) 
		{
			$data = $request->except('_token');

			$result = Mail::send('contacts.email',['data'=>$data], function($message) use ($data) 
            {
                $mail_admin = env('MAIL_USERNAME');

                $message->from($mail_admin,$data['name']);
                $message->to('rsoib1996@gmail.com')->subject('Вопросы из сайта');

            });

          	return redirect()->route('contacts')->with('status',Lang::get('ru.email_send'));
		}

	}

}
