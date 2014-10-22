@extends('master')

@section('title')
    A Developer's Companion
@stop

@section('head')
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
@stop

@section('content')
        <article id="main">
		<header class="special container">
			<h2>A Developer's Companion</h2>
			<hr/>
			<section class="wrapper style2 container special-alt">
				<div class="row half collapse-at-2">
					<div class="4u">
						<a href="{{ URL::route('pw') }}">
							<i class="fa fa-lock fa-5x"></i>
						</a>
					</div>
					<div class="4u">
						<a href="{{ URL::route('lorem') }}">
							<i class="fa fa-quote-left fa-5x"></i>
						</a>
					</div>
					<div class="4u">
						<a href="{{ URL::route('user') }}">
							<i class="fa fa-user fa-5x"></i>
						</a>
					</div>
				</div>
				<div class="row half collapse-at-2">
					<div class="4u">
						<p>XKCD Password Generator</p>
					</div>
					<div class="4u">
						<p>Lorem Ipsum Generator</p>
					</div>
					<div class="4u">
						<p>User Generator</p>
					</div>
				</div>
			</section>
		</header>
	</article>		
@stop
