<?php

	class PW
	{
		private $spec_chars = array("!", "@", "#", "*", "+");
		private $char_count = count($spec_chars);
		private $line_max = 0;
		private $password; //string

		/**
		* @param int $num_words, int $num_special
		* @return array $password
		*/
		public function generate_pw($num_words, $num_special)
		{	
			// set up words; from file of 10000 most common words
			private $myfile = fopen("wordlist.txt", "r");
			if ($myfile) 
			{
				while (!feof($myfile)) 
				{
					// put all words in array
						$lines[] = trim(fgets($myfile));
						$line_max++;
				}
			}
			// close file
			fclose($myfile);
			
			// build pw
			for ($i = 0; $i < $num_words; $i++)
			{
				// pick a random word from file
				$rand_words = rand(0, $line_max);
				$password = $password . $lines[$rand_words];
				
				// if not last word of pw...
				if ($i != ($num_words - 1))
				{
					// add a hyphen
					$password = $password . "-";
				}
				// if it's the last word
				else
				{	
					// add in any request special chars
					for ($j = 0; $j < $num_special; $j++)
					{
						$rand_char = rand(0, ($char_count - 1));
						$password = $password . $spec_chars[$rand_char];
					}
					// and add numbers if requested
					if (array_key_exists('num_opt', $_GET))
					{
						$password = $password . rand(0, 99);
					}				
				}
			}
			return $password;
		}
	}
?>