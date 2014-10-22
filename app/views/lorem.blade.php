@extends('master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('content')
    <article id="main">
		<header class="special container">
			<h2>Lorem Ipsum Generator</h2>
			<hr/>
			<section class="wrapper style2 container special-alt">
				<header>
					{{ Form::open(array('action' => 'loremController@generateLorem')) }}
					<div class="row half collapse-at-2">
						<div class="6u">
							{{ Form::label('How many paragraphs? (max 9)') }}
						</div>
						<div class="6u">
							{{ Form::text('num_para', Input::get('num_para')) }}
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
