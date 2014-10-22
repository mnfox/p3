<?php

	class PWHelper {
		/**
		 * generate an xkcd pw
		 *
		 * @param int $num_words, int $num_special
		 * @return string $password
		 */
		public static function generate_pw($num_words, $num_special)
		{
			// set up special chars (can be expanded upon later)
			$spec_chars = array("!", "@", "#", "*", "+");
			$char_count = count($spec_chars);
			$password = '';
			
			// set up words; from file of 10000 most common words
			$line_max = 0;
			$myfile = fopen("wordlist.txt", "r");
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
				}
			}

			return $password;
		}
	}
?>