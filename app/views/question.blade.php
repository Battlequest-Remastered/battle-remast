@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
		<div class="commandline">
			<span class="lastanswer">{{{$lastanswer->answer}}}</span>
			<br>
			<span class="question">{{$question->question}}</span>
			@foreach($answers as $answer)
			<br>
				<a href="{{{action('HomeController@question', array($answer->leads_to_id, $answer->id))}}}">{{{$answer->answer}}}</a>
			@endforeach
		</div>
	</div>
</div>
@stop