<?php

	class userController extends BaseController 
	{
		public function home() 
		{
			return View::make('user');
		}

		public function generateUser()
		{
			$user = "catfacemeow";
			return View::make('user')->with('user', $user);	
		}
	}

?>