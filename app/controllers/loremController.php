<?php

	class loremController extends BaseController 
	{
		public function home() 
		{
			return View::make('lorem');
		}

		public function generateLorem()
		{
			$lorem = "meowmeowmeow";
			return View::make('lorem')->with('lorem', $lorem);	
		}
	}

?>