@extends('master')

@section('title')
    XKCD Password Generator
@stop

@section('content')
    <article id="main">
		<header class="special container">
			<h2>XKCD Password Generator</h2>
			<hr/>
			<section class="wrapper style2 container special-alt">
				<header>
					<h2>Your password is...</h2>
					<p><?php echo $password; ?></p>
					<br />
					{{ Form::open(array('action' => 'pwController@whichPW')) }}
					<div class="row half collapse-at-2">
						<div class="6u">
							{{ Form::label('How many words? (max 9)') }}
						</div>
						<div class="6u">
							{{ Form::text('num_words', Input::get('num_words')) }}
						</div>
					</div>
					<div class="row half collapse-at-2">
						<div class="6u">
							{{ Form::label('How many special chars? (max 3)') }}
						</div>
						<div class="6u">
							{{ Form::text('num_special', Input::get('num_special')) }}
						</div>
					</div>
					<br /><br />
					{{ Form::submit('Generate Another') }}
					{{ Form::close() }}
				</header>
			</section>
			<img src="images/xkcd.png" alt="XKCD Password Comic" />
		</header>
	</article>		
@stop
