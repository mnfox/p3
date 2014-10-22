<?php

	class loremController extends BaseController 
	{
		public function home() 
		{
			$lorem = "";
			return View::make('lorem')->with('lorem', $lorem);	
		}

		public function generateLorem()
		{
			$np = Input::get('num_para');
			if(!(ctype_digit($np)))
			{
				$lorem = "please enter an integer to continue";
			}
			// if more than 9 words requested, show error
			else if($np > 9)
			{
				$lorem = "sorry, this exceeds maximum number of paragraphs";
			}
			else
			{
				$generator = new Badcow\LoremIpsum\Generator();
				$paras = $generator->getParagraphs(Input::get('num_para'));
				$lorem = '<h2>Your Lorem Ipsum:</h2><br /><p>' . implode('<p></p>', $paras) . '</p>';
			}
			return View::make('lorem')->with('lorem', $lorem);	
		}
	}

?>