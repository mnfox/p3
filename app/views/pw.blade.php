@extends('master')

@section('title')
    XKCD Password Generator
@stop

@section('head')
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
@stop

@section('content')
    <article id="main">
		<header class="special container">
			<i class="fa fa-lock fa-5x"></i>
			<h2>XKCD Password Generator</h2>
			<hr/>
			<section class="wrapper style2 container special-alt">
				
					<h2>Your password is...</h2>
					<p><?php echo $password; ?></p>
					<br />
					{{ Form::open(array('action' => 'pwController@whichPW')) }}
					<div class="row half collapse-at-2">
						<div class="6u">
							{{ Form::label('words', 'How many words? (max 9)') }}
						</div>
						<div class="6u">
							{{ Form::text('num_words', Input::get('num_words')) }}
						</div>
					</div>
					<div class="row half collapse-at-2">
						<div class="6u">
							{{ Form::label('spec', 'How many special chars? (max 3)') }}
						</div>
						<div class="6u">
							{{ Form::text('num_special', Input::get('num_special')) }}
						</div>
					</div>
					<br /><br />
					{{ Form::submit('Generate Another') }}
					{{ Form::close() }}
			</section>
			<img src="images/xkcd.png" alt="XKCD Password Comic" />
		</header>
	</article>	
	<div class="backbutton">
		<a href="{{ URL::route('best') }}">
			<i class="fa fa-arrow-circle-left fa-2x"></i> 
		</a>
	</div>	
@stop
