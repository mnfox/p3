@extends('master')

@section('title')
    User Generator
@stop

@section('content')
    <article id="main">
		<header class="special container">
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
				</header>
			</section>
		</header>
	</article>	
@stop
