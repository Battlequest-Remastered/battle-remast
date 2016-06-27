@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4">
		<div class="commandline">
			<p class="description">Developed in 1982, Battlequest (or "Battle Quest" as it was called in its original iteration) was responsible for the sudden boom of text-based adventure games in the mid to late 80's. It exceeded all theorised sales figures, taking the world (as well as the entertainment industry) by surprise. For the first time in history, crawling through dungeons and meeting wizards and dragons was something that could be done somewhere other than a tabletop.<br>
			For all of its success and its influence on modern gaming, however, Battlequest was unfortunately released far too early for its content. Though 80's America was on the verge of social progressivism, an interactive experience in which a homosexual relationship was possible was not something that the general public was prepared to accept. Battlequest was also criticized by President Reagan for its heavy-handed critique of suburban culture. As if criticism from both left and right wing America was not enough, Battlequest also faced criticism from critics independent of politics. The ironic tone of the game was written off as tonal inconsistency, and critics at the time had a hard time believing that a computer game was worth a buyer's time, especially given the busy schedule of the average American in the early 80's.<br>
			Battlequest broke down barriers and shocked the world with its high sales. Many developers would rise in its wake and continue the trend of providing entertainment to the public through computer simulation. However, its critical reception and the deluge of games that came after it caused Battlequest to be largely lost to time. What was once a record breaking, trend-setting game became nothing more than a distant memory, a nostalgia piece for the modern gaming world.<br>
			However, in 2016, developer Reagan Wilkins discovered the code for the original command-line version of Battlequest and decided it was time to bring it back to life. In Battlequest: Rebattled, the majority of the original narrative has been restored for web browsers of all types and sizes. It is his hope that, by being able to play this trailblazer of a game, modern gamers will remember their roots.
			</p>
			<a href="{{{action('HomeController@firstquestion', 1)}}}">Play Now!</a>
		</div>
	</div>
</div>
@stop