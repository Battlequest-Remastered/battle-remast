@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12">
		<div class="commandline">
			<span class="lastanswer">{{{$lastanswer->answer}}}</span>
			<br>
			<span class="question">{{$question->question}}</span>
			@foreach($answers as $answer)
			<br>
				<a href="{{{action('HomeController@question', array($answer->leads_to_id, $answer->id))}}}">{{{$answer->answer}}}</a>
			@endforeach
			<br>
			@if($question->is_ending == "Yes") 
				<a href="{{{action('HomeController@firstquestion', 1)}}}">Play Again</a>
			@endif
		</div>
	</div>
</div>
@stop