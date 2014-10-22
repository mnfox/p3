@extends('master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('head')
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
@stop

@section('content')
    <article id="main">
		<header class="special container">
			<i class="fa fa-quote-left fa-5x"></i>
			<h2>Lorem Ipsum Generator</h2>
			<hr/>
			<section class="wrapper style2 container special-alt">
					{{ Form::open(array('action' => 'loremController@generateLorem')) }}
					<div class="row half collapse-at-2">
						<div class="6u">
							{{ Form::label('para', 'How many paragraphs? (max 9)') }}
						</div>
						<div class="6u">
							{{ Form::text('num_para', Input::get('num_para')) }}
						</div>
					</div>
					<br /><br />
					{{ Form::submit('Generate!') }}
					{{ Form::close() }}
					<?php echo $lorem ?>
			</section>
		</header>
	</article>		
	<div class="backbutton">
		<a href="{{ URL::route('best') }}">
			<i class="fa fa-arrow-circle-left fa-2x"></i> 
		</a>
	</div>
@stop
