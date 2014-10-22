@extends('master')

@section('title')
    User Generator
@stop

@section('head')
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
@stop

@section('content')
	<div class="backbutton">
		<a href="{{ URL::route('best') }}">
			<i class="fa fa-arrow-circle-left fa-2x"></i> 
		</a>
	</div>
    <article id="main">
		<header class="special container">
			<i class="fa fa-user fa-5x"></i>
			<h2>User Generator</h2>
			<hr/>
			<section class="wrapper style2 container special-alt">
				<header>
					{{ Form::open(array('action' => 'userController@generateUser')) }}
					<div class="row half collapse-at-2">
						<div class="6u">
							{{ Form::label('How many users? (max 9)') }}
						</div>
						<div class="6u">
							{{ Form::text('num_users', Input::get('num_users')) }}
						</div>
					</div>
					<br /><br />
					{{ Form::submit('Generate!') }}
					{{ Form::close() }}
					<br /><br />
					<?php echo $user; ?>
				</header>
			</section>
		</header>
	</article>	
@stop
