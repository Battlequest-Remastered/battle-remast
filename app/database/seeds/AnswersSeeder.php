<?php
class AnswersSeeder extends Seeder {
	$answer = new Answer();
	$answer->question_id = 1;
	$answer->answer = "Try to get up";
	$answer->leads_to_id = 2;
	$answer->save();

	$answer = new Answer();
	$answer->question_id = 1;
	$answer->answer = "Call Out";
	$answer->leads_to_id = 3;
	$answer->save();

	$answer = new Answer();
	$answer->question_id = 1;
	$answer->answer = "Accept your fate and remain lying down forever";
	$answer->leads_to_id = 4;
	$answer->save();
}
?>