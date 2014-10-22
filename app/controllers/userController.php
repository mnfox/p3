<?php

	class userController extends BaseController 
	{
		public function home() 
		{
			$user = "";	
			return View::make('user')->with('user', $user);	
		}

		public function generateUser()
		{
			$nu = Input::get("num_users");
			$user = "";
			
			if(!(ctype_digit($nu)))
			{
				$user = "please enter an integer to continue";
			}
			// if more than 9 words requested, show error
			else if($nu > 9)
			{
				$user = "sorry, this exceeds maximum number of users";
			}
			else
			{
				for($i = 0; $i<$nu; $i++)
				{
					$faker = Faker\Factory::create();
					$user = $user . $faker->name . '<br />';
					$user = $user . $faker->address . '<br />';
					$user = $user . $faker->text;
					if ($i != $nu-1)
					{
						$user = $user . '<br /></br />';
					}
				}
			}
			
			return View::make('user')->with('user', $user);	
		}
	}

?>