<?php

	class bestController extends BaseController 
	{
		public function home() 
		{
			$best = "";
			return View::make('best')->with('lorem', $best);	
		}
	}
?>