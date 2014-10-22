<?php

	class pwController extends BaseController 
	{
		public function home() 
		{
			$password = PWHelper::generate_pw(3, 3);
			return View::make('pw')->with('password', $password);
		}

		public function whichPW()
		{
			$nw = Input::get('num_words');
			$ns = Input::get('num_special');

			if(!(ctype_digit($nw)) or !(ctype_digit($ns)))
			{
				$password = "please enter integers to continue";
			}
			// if more than 9 words requested, show error
			else if($nw > 9)
			{
				$password = "sorry, this exceeds maximum number of words";
			}
			// if more than 3 special chars requested, show error
			else if($ns > 3)
			{
				$password = "sorry, this exceeds maximum number of special characters";
			}
			else
			{
				$password = PWHelper::generate_pw($nw,$ns);
			}		
			return View::make('pw')->with('password', $password);
		}
	}

?>