<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('home');
	}

	public function submit()
	{
		$email = Input::get('input_email');
		
		$rules = array(
			'input_email' => 'required|email'
		);

		//get all post data
		$postData = Input::all();

		// run the validator
		$validator = Validator::make($postData, $rules);

		if ($validator->fails())
		{
			return Redirect::to('home')->withErrors($validator);
		}

		//insert into database --> change this to save feature using ORM models (eventually)
		DB::insert('insert into email_list (email) values (?)', array($email));

		return Redirect::to('success');
	}

}